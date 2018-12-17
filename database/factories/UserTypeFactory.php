<?php

use Faker\Generator as Faker;

$factory->define(App\models\usertypeModel::class, function (Faker $faker) {
    return [
        'user_type' => str_random(10),
    ];
});
