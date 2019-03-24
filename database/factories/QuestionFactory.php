<?php

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 8)), "."),
        	'body' => $faker->paragraphs(rand(2, 4), true),
        		'views' => rand(0, 10),
        			'answers' => rand(2, 12),
        				'votes' => rand(-3, 11),
        					'user_id' => rand(1, 3)
    ];
});
