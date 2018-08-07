<?php

use Faker\Generator as Faker;

$factory->define(App\Quality::class, function (Faker $faker) {
    return [
        'quality_type_id' =>$faker->numberBetween(0, 2),
        'user_id' =>$faker->randomNumber()
    ];
});
