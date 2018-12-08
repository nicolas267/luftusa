<?php

use Faker\Generator as Faker;

$factory->define(App\Models\usertypeModel::class, function (Faker $faker) {
    return [
        'user_type' => str_random(10),
    ];
});
