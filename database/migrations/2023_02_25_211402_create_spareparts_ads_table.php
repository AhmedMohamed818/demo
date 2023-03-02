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
        Schema::create('spareparts_ads', function (Blueprint $table) {
            $table->id();
            $table->string('SSN');
            $table->string('user_name');
            $table->string('type');
            $table->string('brand');
            $table->string('condition');
            $table->string('location');
            $table->string('image');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spareparts_ads');
    }
};
