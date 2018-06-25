<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence,
        'categoria_id'=>'1',
        'codigo'=>$faker->sentence,
        'description'=>$faker->sentence
    ];
});
