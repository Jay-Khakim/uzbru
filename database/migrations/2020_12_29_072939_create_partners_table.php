<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 300)->nullable();
            $table->string('name_uz', 300)->nullable();
            $table->string('name_ru', 300)->nullable();
            $table->string('field_en', 600)->nullable();
            $table->string('field_uz', 600)->nullable();
            $table->string('field_ru', 600)->nullable();
            $table->string('web')->nullable();
            $table->longText('desc_en')->nullable();
            $table->longText('desc_uz')->nullable();
            $table->longText('desc_ru')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
