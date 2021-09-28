<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        
        'price'=>$faker->name,
        'category_id'=>factory(App\category::class),

    ];
});
