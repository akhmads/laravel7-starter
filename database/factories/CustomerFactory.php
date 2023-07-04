<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'CustName' => $faker->company,
        'CustContactName' => $faker->name,
        'CustEmail' => $faker->unique()->safeEmail,
        'CustAddress' => $faker->address,
        'CustPhone' => $faker->tollFreePhoneNumber,
        'CustMobile' => $faker->e164PhoneNumber,
        'CustNote' => $faker->text,
    ];
});
