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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name')-> NotNull();
            $table->string('company_name')-> NotNull();
            $table->string('department_name')-> NotNull();
            $table->string('company_webside')-> nullable();
            $table->string('mission_name')-> NotNull();
            $table->boolean('is_active')->nullable()->default(false);
            $table->string('description')-> nullable();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->date('start_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['name', 'company_name']);

        });
        DB::statement('ALTER TABLE experiences ADD CONSTRAINT chk_start_leaving_date CHECK ( start_date< leaving_date);');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
