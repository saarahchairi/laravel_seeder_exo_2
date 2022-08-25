<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompagniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            "nom"=> Faker::create()->company,
            "adresse"=> Faker::create()->streetName,
            "codePostal"=> Faker::create()->postcode($min=1000, $max=9000),
            "numeroPorte"=> Faker::create()->buildingNumber,
            "telephone"=> Faker::create()->phoneNumber($min=1000, $max=9000),
            "email"=> Faker::create()->email,
            "nomPerso"=> Faker::create()->firstName,
            "prenomPerso"=> Faker::create()->lastName,
            "img"=> Faker::create()->url,
        ]);
    }
}
