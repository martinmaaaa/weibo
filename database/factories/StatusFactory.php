<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\User;

$factory->define(App\Models\Status::class, function (Faker $faker) {
	$date_time = $faker->date . ' ' . $faker->time;
    return [
        'content' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
        'user_id' => $faker->randomElement([1,2,3]),

    ];
});
