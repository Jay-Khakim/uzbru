<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Partner;
use Faker\Generator as Faker;

$factory->define(Partner::class, function (Faker $faker) {
    return [
        'name_en' => $faker->word,
        'name_uz' => $faker->word,
        'name_ru' => $faker->word,
        'field_en' => $faker->word,
        'field_uz' => $faker->word,
        'field_ru' => $faker->word,
        'web' => $faker->word,
        'desc_en' => $faker->text,
        'desc_uz' => $faker->text,
        'desc_ru' => $faker->text,
        'email' => $faker->safeEmail,
        'facebook' => $faker->word,
        'instagram' => $faker->word,
        'linkedin' => $faker->word,
        'twitter' => $faker->word,
        'image' => $faker->word,
    ];
});
