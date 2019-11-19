<?php

use App\pelanggan;
use App\produk;
use App\kategori;

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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(pelanggan::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'alamat' => $faker->address,
    ];
});
$factory->define(produk::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->name,
        'stok' => $faker->numberBetween(0, 1000),
    ];
});
$factory->define(kategori::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->name,
    ];
});
