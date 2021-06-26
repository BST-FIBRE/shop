<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    protected $model = Discount::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'percentage' => $this->faker->numerify('##############'),
            'start_at' => $this->faker->name(),
            'end_at' => '',
        ];
    }
}
