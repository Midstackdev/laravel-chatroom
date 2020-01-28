<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chat\Message;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(7),
        'user_id' => function () {
        	return factory(User::class)->create()->id;
        }
    ];
});
