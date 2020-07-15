<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'date' => now(),

        'titre' => $faker->sentence,
        'contenu' => $faker->paragraphs(3,true),
        'extrait' => $faker->sentence,
    ];
});
