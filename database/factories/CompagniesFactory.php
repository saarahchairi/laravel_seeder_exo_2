<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compagnies>
 */
class CompagniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=> $this->faker->company,
            "adresse"=> $this->faker->streetName,
            "codePostal"=> $this->faker->postcode($min=1000, $max=9000),
            "numeroPorte"=> $this->faker->buildingNumber,
            "telephone"=> $this->faker->phoneNumber($min=1000, $max=9000),
            "email"=> $this->faker->email,
            "nomPerso"=> $this->faker->firstName,
            "prenomPerso"=> $this->faker->lastName,
            "img"=> $this->faker->url,
        ];
    }
}
