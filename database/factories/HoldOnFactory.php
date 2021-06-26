<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Famillies;
use App\Models\HoldOn;
use Illuminate\Database\Eloquent\Factories\Factory;

class HoldOnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HoldOn::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = Categorie::pluck('name')->toArray();
        $ids = Famillies::pluck('id')->toArray();
        return [
            'id_familly' => $this->faker->randomElement($ids),
            'name_category' => $this->faker->randomElement($names)
        ];
    }
}
