<?php

use \App\Models\Drivers\Drivers;
use \App\Models\Staffs\Staffs;
use \App\Models\Filials\Filials;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Drivers::class, function (Faker\Generator $faker)
{
    return [
        'title' => $faker->title,
    ];
});

$factory->define(Staffs::class, function (Faker\Generator $faker)
{
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstName.'vich',
    ];
});

$factory->define(Filials::class, function (Faker\Generator $faker)
{
    return [
        'title' => $faker->city
    ];
});
