<?php

use Faker\Generator as Faker;

$factory->define(App\FirModel::class, function (Faker $faker) {
    return [
        'complaint' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'type_id' => $faker->numberBetween($min = 1, $max = 15),
        'crime_happened' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'time_happened' => 'Morning',
        'casualties' => 0,
        'items_stolen' => 0,
        'city' => $faker->city,
        'pincode' => $faker->postcode,
        'state' => $faker->state,
        'name' => $faker->name,
        'phone_no' => $faker->numberBetween($min = 900000000, $max = 9999999999),
        'email' => $faker->safeEmail,
        'address' => $faker->address,
        'aadhar_no' => $faker->md5,
        'aadhar_photo' => "image_name",
        'ip_address' => "192.168.1.1",
        "is_authenticated" => 0,
    ];
});
