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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('course_name',40);
            $table->string('course_level',60);
            $table->integer('course_duration');
            $table->longText('course_description')->nullable();
            $table->double('price', 8, 2);
            $table->string('course_provider',90);
            $table->string('course_category',90);
            // $table->unsignedBigInteger('course_category_id');
            // $table->foreign('course_category_id')->references('course_category_id')->on('course_category');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('image_path')->nullable();
            $table->double('course_rating',2,1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
