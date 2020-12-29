<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(["association","all"]),
        'title_en' => $faker->word,
        'title_uz' => $faker->word,
        'title_ru' => $faker->word,
        'slug_en' => $faker->word,
        'body_en' => $faker->text,
        'body_uz' => $faker->text,
        'body_ru' => $faker->text,
        'author_en' => $faker->word,
        'author_uz' => $faker->word,
        'author_ru' => $faker->word,
        'link' => $faker->word,
        'image1' => $faker->word,
        'image2' => $faker->word,
        'image3' => $faker->word,
        'image4' => $faker->word,
    ];
});
