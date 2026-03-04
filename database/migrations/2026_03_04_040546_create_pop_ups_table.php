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
        Schema::create('pop_ups', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("link")->nullable();
            $table->string("image")->nullable();
            $table->longText("description")->nullable();
            $table->integer("order")->default(1)->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pop_ups');
    }
};
