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
$factory->define(App\Entities\System\Auth\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'created_by' => Auth::user()->id,
        'updated_by' => Auth::user()->id
    ];
});
$factory->define(App\Entities\System\Auth\Person::class, function (Faker\Generator $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->email,
        'created_by' => Auth::user()->id,
        'updated_by' => Auth::user()->id
    ];
});
$factory->define(App\Entities\System\Auth\Store::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->words('100', true),
        'address' => $faker->streetAddress,
        'created_by' => Auth::user()->id,
        'updated_by' => Auth::user()->id
    ];
});
