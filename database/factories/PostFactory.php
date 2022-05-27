<?php

namespace Database\Factories;


use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Http\Client\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->text(100),
        ];
    }


}
