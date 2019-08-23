<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Brand;
use App\Category;
use Faker\Generator as Faker;

$categories = Category::all();
$brands = Brand::all();

$factory->define(Product::class, function (Faker $faker) use ($categories, $brands) {
    return [
        "name" => $faker->realText(50),
        "stock" => $faker->numberBetween(0, 1000),
        "price" => $faker->randomFloat(null, 0, 100),
        "category_id" => $categories->shuffle()[0]->id,
        "brand_id" => $brands->shuffle()[0]->id
    ];
});
