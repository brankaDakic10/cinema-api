<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    

    return [
        'title' => $faker->text(20),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(60, 200),
        'releaseDate' => $faker->date(),
        'genre'=>$faker->text(10)
       
    ];
});