<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence(2),
        'description'=> $faker->sentence(20),
        'price'=> $faker->numberBetween($min = 100, $max = 1000),
    ];
});
