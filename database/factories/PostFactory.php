<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $authors = App\Author::all()->pluck('id')->toArray();
    
    return [
        'author_id' => $faker->randomElement($authors),
        'header'    => substr($faker->sentence(2), 0, -1),
        'content'   => $faker->text(300),
        'rating'    => $faker->randomNumber(),
    ];
});
