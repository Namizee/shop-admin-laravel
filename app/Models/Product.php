<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = false;

    public function colors() {
        return $this->belongsToMany(Color::class);
    }

    public function getImageUrlAttribute() {
        return Storage::disk('public')->url($this->image);
    }

    public function scopeEnabled(Builder $query) {
        $query->where('disabled',0);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
