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
            $table->id(); // id (PK, AI)
            $table->string('name'); // title
            $table->string('slug')->unique(); // slug
            $table->text('description'); // description
            $table->integer('price_start'); // price_start
            $table->integer('price_max'); // price_max
            $table->string('thumbnail_url')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active'); // status
            $table->timestamps(); // created_at & updated_at
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
