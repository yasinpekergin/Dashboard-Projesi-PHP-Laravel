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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')-> NotNull();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable()->default(null)->unique();
            $table->unsignedBigInteger('gender_id')->unsigned()->nullable()->default(null);
            $table->text('about')-> nullable();
            $table->string('description')-> nullable();
            $table->string('mobile_phone')->nullable()->unique();
            $table->string('internal_phone')->nullable();
            $table->string('second_email')->nullable()->default(null)->unique();
            $table->date('date_of_birth')->nullable()->default(null);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
