<?php

use Faker\Generator as Faker;

$factory->define(App\models\carversionModel::class, function (Faker $faker) {
    return [
        'car_version' => str_random(10),
    ];
});
