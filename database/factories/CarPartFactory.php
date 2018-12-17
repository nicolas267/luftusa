<?php

use Faker\Generator as Faker;

$factory->define(App\models\carpartModel::class, function (Faker $faker) {
    return [
        'car_id' => Factory(App\models\carModel::class)->create()->id,
        'part' => str_random(10),
        'price' => $faker->randomDigit,
        'stock' => $faker->randomDigit,
    ];
});
