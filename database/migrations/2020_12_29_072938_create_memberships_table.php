<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ["active","inactive"]);
            $table->string('name_en', 300)->nullable();
            $table->string('name_uz', 300)->nullable();
            $table->string('name_ru', 300)->nullable();
            $table->string('owner_en', 300)->nullable();
            $table->string('owner_uz', 300)->nullable();
            $table->string('owner_ru', 300)->nullable();
            $table->string('field_en', 300)->nullable();
            $table->string('field_uz', 300)->nullable();
            $table->string('field_ru', 300)->nullable();
            $table->string('slug_en', 300)->unique()->nullable();
            $table->integer('certificate_number')->nullable();
            $table->integer('inn')->nullable();
            $table->integer('year')->nullable();
            $table->integer('value')->nullable();
            $table->date('expiry_date')->nullable();
            $table->longText('desc_en')->nullable();
            $table->longText('desc_uz')->nullable();
            $table->longText('desc_ru')->nullable();
            $table->string('file', 300)->nullable();
            $table->string('web')->nullable();
            $table->string('email', 100)->nullable();
            $table->char('phone', 25)->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_uz')->nullable();
            $table->string('address_ru')->nullable();
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
        Schema::dropIfExists('memberships');
    }
}
