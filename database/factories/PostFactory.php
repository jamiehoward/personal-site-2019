<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$title = ucfirst($faker->words(3, true));

    return [
        'title' => $title,
        'permalink' => strtolower(\Str::kebab($title)),
        'content' => $faker->paragraphs(3, true),
    ];
});
