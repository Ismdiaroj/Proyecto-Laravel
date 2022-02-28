<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alimento>
 */
class AlimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->word(),
            'kcal'=> $this->faker->numberBetween(50,500),
            'proteinas'=> $this->faker->numberBetween(10,30),
            'hidratos'=> $this->faker->numberBetween(10,80),
            'azucares'=>$this->faker->numberBetween(10,50)
        ];
    }
}
