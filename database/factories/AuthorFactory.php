<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'link' => $faker->url,
        'username' => $faker->userName,
        'fullName' => $faker->name(null),
        'image' => $faker->imageUrl(800, 600, 'people'),
    ];
});
