<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition()
    {
        return [
            'name_tag' => $this->faker->unique()->word,
            'color' => $this->faker->hexColor(),
        ];
    }
}
