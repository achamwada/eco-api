<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->randomFloat(2,10, 100),
        'discount' => $faker->numberBetween(10,40),
        'rating' => $faker->numberBetween(0,5),
        'stock' => $faker->numberBetween(0,5)
    ];
});
