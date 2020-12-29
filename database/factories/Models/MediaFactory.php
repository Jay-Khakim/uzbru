<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(["photo","video"]),
        'title_en' => $faker->word,
        'title_uz' => $faker->word,
        'title_ru' => $faker->word,
        'slug_en' => $faker->word,
        'body_en' => $faker->text,
        'body_uz' => $faker->text,
        'body_ru' => $faker->text,
        'link' => $faker->word,
        'image1' => $faker->word,
    ];
});
