<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ["association","all"]);
            $table->string('title_en', 500)->nullable();
            $table->string('title_uz', 500)->nullable();
            $table->string('title_ru', 500)->nullable();
            $table->string('slug_en', 300)->unique()->nullable();
            $table->longText('body_en')->nullable();
            $table->longText('body_uz')->nullable();
            $table->longText('body_ru')->nullable();
            $table->string('author_en', 100)->nullable();
            $table->string('author_uz', 100)->nullable();
            $table->string('author_ru', 100)->nullable();
            $table->string('link')->nullable();
            $table->string('image1', 1600)->nullable();
            $table->string('image2', 1600)->nullable();
            $table->string('image3', 1600)->nullable();
            $table->string('image4', 1600)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
