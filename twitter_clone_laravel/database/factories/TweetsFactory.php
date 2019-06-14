<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\tweets;
use Faker\Generator as Faker;

$factory->define(tweets::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'text' => $faker->sentence(3)
    ];
});
