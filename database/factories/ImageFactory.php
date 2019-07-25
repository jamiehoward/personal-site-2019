<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'src' => $faker->imageUrl,
        'link' => $faker->url,
        'caption' => $faker->words(3, true),
    ];
});
