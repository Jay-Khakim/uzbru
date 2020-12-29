<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 300)->nullable();
            $table->string('name_uz', 300)->nullable();
            $table->string('name_ru', 300)->nullable();
            $table->string('position_en', 300)->nullable();
            $table->string('position_uz', 300)->nullable();
            $table->string('position_ru', 300)->nullable();
            $table->string('reception_time_en', 300)->nullable();
            $table->string('reception_time_uz', 300)->nullable();
            $table->string('reception_time_ru', 300)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('image', 1500)->nullable();
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
        Schema::dropIfExists('staff');
    }
}
