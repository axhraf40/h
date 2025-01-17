<?php

namespace Database\Factories;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Owner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name, // Génère un nom aléatoire
            'email' => $this->faker->unique()->safeEmail, // Génère un email unique
            'phone' => $this->faker->phoneNumber, // Génère un numéro de téléphone
        ];
    }
}