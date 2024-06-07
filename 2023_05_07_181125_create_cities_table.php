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
        //
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')-> NotNull();
            $table->unsignedBigInteger('country_id')->unsigned()->nullable()->default(null);
            $table->string('country_code')-> nullable();
            $table->string('fips_code')-> nullable();
            $table->string('iso2')-> nullable();
            $table->string('type')-> nullable();
            $table->decimal('latitude',10,8)-> nullable();
            $table->decimal('longitude',11,8)-> nullable();
            $table->tinyInteger('flag')-> nullable();
            $table->string('wikiDataId')-> nullable();
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cities');
    }
};
