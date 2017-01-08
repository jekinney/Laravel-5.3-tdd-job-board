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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Users\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    $name = $faker->name;

    return [
        'slug' => str_slug($name),
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Users\Models\Role::class, function (Faker\Generator $faker) {
	$name = $faker->name;

    return [
        'name' => $name,
        'slug' => str_slug($name),
    ];
});

$factory->state(App\Users\Models\Role::class, 'developer', function() {
	return [
		'name' => 'Developer',
		'slug' => 'developer',
	];
});

$factory->state(App\Users\Models\Role::class, 'employer', function() {
	return [
		'name' => 'Employer',
		'slug' => 'employer',
	];
});
