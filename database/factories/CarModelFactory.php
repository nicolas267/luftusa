<?php

use Faker\Generator as Faker;

$factory->define(App\models\carmodelModel::class, function (Faker $faker) {
    return [
        'car_model' => str_random(10),
    ];
});

