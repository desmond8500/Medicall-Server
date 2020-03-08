<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Commentaire;
use Faker\Generator as Faker;

$factory->define(Commentaire::class, function (Faker $faker) {

    return [
        'nom' => $faker->word,
        'mail' => $faker->word,
        'tel' => $faker->word,
        'message' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
