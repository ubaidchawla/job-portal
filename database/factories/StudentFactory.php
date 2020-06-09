<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    $uniarray = array('GIKI','LUMS','FAST','IBA','NUST','LSE','UET');
$companyarray = array('Afiniti','SSI','NETSOL','Systems','SalesFlo','10 Pearls','Techlogix','TxCel',null);

    return [
        'regno' => $faker->unique()->numberBetween(2016000,2016600),
        'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->userName,
        'password' => $faker->password,
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'phone' => $faker->phoneNumber,
        'university' => $uniarray[array_rand($uniarray, 1)],
        'workspace' => $companyarray[array_rand($companyarray, 1)],
        'employeed' => $faker->boolean($chanceOfGettingTrue = 50),
        'verified' => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});
