<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;

    public function definition()
    {
        $names = Categorie::pluck('name')->toArray();
        return [
            'name' => $this->faker->sentence(2, true),
            'sub_name' => $this->faker->randomElement($names)
        ];
    }
}
