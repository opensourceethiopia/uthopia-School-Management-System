<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define( Modules\User\Entities\User::class, function (Faker $faker) {
    return [
        "first_name" => $faker->name,
        "father_name" => $faker->name,
        "grand_father_name" => $faker->name,
        "gender" => $faker->randomElement(["male", "female"]),
        "dob" => $faker->date(),
        "email" => $faker->unique()->safeEmail,
        "phone" => $faker->unique()->phoneNumber,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10)
    ];
});
