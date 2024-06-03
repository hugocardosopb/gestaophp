<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteModel>
 */
class SiteModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'telefone' => fake()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'motivo_contato' => fake()->numberBetween(1,3),
            'mensagem' => fake()->text(200)
        ];
    }
}