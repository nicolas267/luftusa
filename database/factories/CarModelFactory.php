<?php

use Faker\Generator as Faker;

$factory->define(App\Models\carmodelModel::class, function (Faker $faker) {
    return [
        'car_model' => str_random(10),
    ];
});

