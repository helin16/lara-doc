<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
// User
$factory->define(App\Entities\System\Auth\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10)
    ];
});
// Store
$factory->define(App\Entities\System\Auth\Store::class, function (Faker\Generator $faker) {
    return [
	    'name' => $faker->name,
	    'description' => $faker->sentence
    ];
});
// Ingredient
$factory->define(App\Entities\Product\Ingredient::class, function (Faker\Generator $faker) {
    return [
	    'name' => join(', ', $faker->words),
	    'description' => $faker->sentence
    ];
});
