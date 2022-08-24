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
            "codePostal"=> Faker::create()->postcode,
            "numeroPorte"=> Faker::create()->buildingNumber,
            "telephone"=> Faker::create()->phoneNumber,
            "email"=> Faker::create()->email,
            "nomPerso"=> Faker::create()->firstName,
            "prenomPerso"=> Faker::create()->lastName,
            "img"=> Faker::create()->url,
        ]);
    }
}
