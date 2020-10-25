<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Faker\Provider\en_US\PhoneNumber;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'gender' => rand(1,2),
        'phone' => "09".rand(000000001,999999999), 
    ];
});
