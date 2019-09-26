<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$user_id = App\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_id),
        'content' => $faker->text(50),
        
            ];
});
