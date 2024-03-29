<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'name_en' => $faker->word,
        'name_uz' => $faker->word,
        'name_ru' => $faker->word,
        'position_en' => $faker->word,
        'position_uz' => $faker->word,
        'position_ru' => $faker->word,
        'reception_time_en' => $faker->word,
        'reception_time_uz' => $faker->word,
        'reception_time_ru' => $faker->word,
        'email' => $faker->safeEmail,
        'facebook' => $faker->word,
        'instagram' => $faker->word,
        'linkedin' => $faker->word,
        'twitter' => $faker->word,
        'image' => $faker->word,
    ];
});
