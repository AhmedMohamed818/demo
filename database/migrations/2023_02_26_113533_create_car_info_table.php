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
        Schema::create('car_info', function (Blueprint $table) {
            $table->id();
            $table->string('man_name');
            $table->string('model');
            $table->integer('year');
            $table->string('category');
            $table->string('car_name_arabic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_info');
    }
};
