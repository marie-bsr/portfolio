<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [

        'date' => now(),

        'categorie' => $faker->word,
        'titre' => $faker->sentence,
        'contenu' => $faker->paragraphs(3),
        'extrait' => $faker->sentence,

    ];
});
