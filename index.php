<?php

require __DIR__ . '/vendor/autoload.php';

$faker = \Faker\Factory::create('ja_JP');

$results = [];

for ($i = 0; $i < 20000; $i++) {
    $results[] = [
        'name' => "$faker->firstName $faker->lastName",
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'address' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'ip_v4' => $faker->ipv4,
        'ip_v6' => $faker->ipv6,
        'user_agent' => $faker->userAgent,
        'updated_at' => time(),
        'created_at' => $faker->unixTime,
    ];
}

file_put_contents('output.json', json_encode($results, JSON_UNESCAPED_UNICODE));