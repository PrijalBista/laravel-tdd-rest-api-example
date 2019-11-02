<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$name = $faker->name;
	return [
	    'name' => $name,
	    'slug' => Str::slug($name),
	    'price' => random_int(10, 100)
	];
});
