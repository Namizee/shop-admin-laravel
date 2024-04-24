<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductService
{

    public function store($data) {

        try {
            DB::beginTransaction();
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);

            $product = Product::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'content' => $data['content'],
                'image' => $data['image'],
                'price' => $data['price'],
                'count' => $data['count'],
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'],
            ]);

            if (isset($data['color_ids'])) {
                $product->colors()->attach($data['color_ids']);
            }
            DB::commit();
            $response = ['type' => 'success', 'message' => 'Товар загружен!'];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Не удалось загрузить товар!.' . $e->getMessage());
            $response = ['type' => 'danger', 'message' => 'Не удалось загрузить товар!'];
        }

        return $response;
    }

    public function update($data, $product) {
        try {
            DB::beginTransaction();
            if (isset($data['image'])) {
                Storage::disk('public')->delete($product->image);
                $data['image'] = Storage::disk('public')->put('/images', $data['image']);
            }

            if (isset($data['color_ids'])) {
                $product->colors()->sync($data['color_ids']);
                unset($data['color_ids']);
            } else {
                $product->colors()->detach();
            }

            $product->update($data);
            DB::commit();
            $response = ['type' => 'success', 'message' => 'Товар обновлен!'];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Не удалось обновить товар!.' . $e->getMessage());
            $response = ['type' => 'danger', 'message' => 'Не удалось обновить товар!'];
        }

        return $response;
    }
}
