<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "first_name"=> $faker->name,
        "father_name" => $faker->name,
        "grand_father_name" => $faker->name,
        "gender" => $faker->randomElement(["male", "female"]),
        "dob" => $faker->date(),
        "admission_year" => $faker->randomNumber(4, true),
        "student_class_id" => 1
    ];
});
