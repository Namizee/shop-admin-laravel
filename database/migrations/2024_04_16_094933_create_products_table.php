<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->string('image');
            $table->decimal('price');
            $table->integer('count');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');

            $table->boolean('disabled')->default(0);

            $table->index('category_id', 'product_category_idx');
            $table->foreign('category_id', 'product_category_fk')->references('id')->on('categories')->onDelete('cascade');

            $table->index('brand_id', 'product_brand_idx');
            $table->foreign('brand_id', 'product_brand_fk')->references('id')->on('brands')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
