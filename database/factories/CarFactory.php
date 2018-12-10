<?php

use Faker\Generator as Faker;

$factory->define(App\models\carModel::class, function (Faker $faker) {
    return [
        'car_model_id' => Factory(App\models\carmodelModel::class)->create()->id,
        'car_version_id' => Factory(App\models\carversionModel::class)->create()->id,
        'year' => $faker->randomNumber($nbDigits = 4), // secret
    ];
});
