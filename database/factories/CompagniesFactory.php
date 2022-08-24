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
            "codePostal"=> $this->faker->postcode,
            "numeroPorte"=> $this->faker->buildingNumber,
            "telephone"=> $this->faker->phoneNumber,
            "email"=> $this->faker->email,
            "nomPerso"=> $this->faker->firstName,
            "prenomPerso"=> $this->faker->lastName,
            "img"=> $this->faker->url,
        ];
    }
}
