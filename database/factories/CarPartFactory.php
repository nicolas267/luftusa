<?php

use Faker\Generator as Faker;

$factory->define(App\Models\carpartModel::class, function (Faker $faker) {
    return [
        'car_id' => Factory(App\Models\carModel::class)->create()->id,
        'part' => str_random(10),
        'price' => $faker->randomDigit,
        'stock' => $faker->randomDigit,
    ];
});
