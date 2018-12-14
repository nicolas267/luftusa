<?php

use Faker\Generator as Faker;

$factory->define(App\models\cartypeModel::class, function (Faker $faker) {
    return [
        'car_type' => str_random(10),
    ];
});
