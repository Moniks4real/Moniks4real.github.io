<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Crud::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'image1' =>$faker->image,
        'type' => $faker->name,
        'weight' => $faker->name,
        'color' => $faker->name,
        'active' => $faker->name,
        'image' => $faker->image,
        'quantity' => $faker->randomnumber,
        'price' => $faker->randomnumber,
    ];
});
