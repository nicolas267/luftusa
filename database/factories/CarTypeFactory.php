<?php

use Faker\Generator as Faker;

$factory->define(App\Models\cartypeModel::class, function (Faker $faker) {
    return [
        'car_type' => str_random(10),
    ];
});
