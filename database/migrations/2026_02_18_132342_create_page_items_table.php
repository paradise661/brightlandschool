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
        Schema::create('page_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('icon')->nullable();
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->json('points')->nullable(); // bullet list
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();

            $table->json('bullet_points')->nullable();
            $table->string('message_name')->nullable();
            $table->string('message_post')->nullable();
            $table->longText('message_description')->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_schema')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_items');
    }
};
