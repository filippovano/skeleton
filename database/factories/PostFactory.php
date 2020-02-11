<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\Author;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $authors = Author::all()->pluck('id')->toArray();

    return [
        'author_id' => $faker->randomElement($authors),
        'header'    => substr($faker->sentence(2), 0, -1),
        'content'   => $faker->realText(200, 1) . $faker->text(300),
        'rating'    => $faker->numberBetween($min = -50, $max = 200),
    ];
});
