<?php

namespace App\Http\Filters;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class ProductsFilter extends AbstractFilter
{

    const TITLE = 'title';
    const CATEGORY = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::CATEGORY => [$this, 'category'],
        ];
    }

    public function title(Builder $builder, $title) {

        return $builder->where('title', 'like', "%{$title}%");
    }

    public function category(Builder $builder, $category) {

        $categories = Category::find($category)->children()->pluck('id')->toArray();

        if (!$categories) {
            return $builder->where('category_id', $category);
        }

        return $builder->whereIn('category_id', Arr::prepend($categories, (int)$category));
    }
}
