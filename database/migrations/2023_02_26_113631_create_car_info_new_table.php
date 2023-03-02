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
        Schema::create('car_info_new', function (Blueprint $table) {
            $table->id();
            $table->string('car_image');
            $table->string('man_photo');
            $table->string('car_man');
            $table->string('car_model');
            $table->integer('car_year');
            $table->string('car_cat');
            $table->string('car_model_arabic');
            $table->integer('car_class');
            $table->string('warranty');
            $table->integer('cc');
            $table->integer('hp');
            $table->string('transmissiontype');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_info_new');
    }
};
