<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EetwensSeeder extends Seeder
{
    public function run()
    {
        DB::table('eetwens')->insert([
            ['id' => 1, 'naam' => 'Geen varkenvlees', 'omschrijving' => 'Geen varkenvlees'],
            ['id' => 2, 'naam' => 'Vegenistisch', 'omschrijving' => 'Geen zuivelproducten en vlees'],
            ['id' => 3, 'naam' => 'Vegetarisch', 'omschrijving' => 'Geen vlees'],
            ['id' => 4, 'naam' => 'Omnivoor', 'omschrijving' => 'Geen beperkingen'],
        ]);
    }
}
