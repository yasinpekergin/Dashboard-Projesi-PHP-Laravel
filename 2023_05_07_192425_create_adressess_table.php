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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('name')-> NotNull();
            $table->string('adress_details')-> NotNull();
            $table->string('postcode')-> NotNull();
            $table->tinyInteger('is_active')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable()->default(null);
            $table->unsignedBigInteger('country_id')->unsigned()->nullable()->default(null);
            $table->unsignedBigInteger('city_id')->unsigned()->nullable()->default(null);
            $table->unsignedBigInteger('district_id')->unsigned()->nullable()->default(null);
            $table->timestamps();

            // forein_keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['name', 'user_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};
