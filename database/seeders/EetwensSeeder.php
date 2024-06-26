<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EetwensSeeder extends Seeder
{
    public function run()
    {
        DB::table('eetwens')->insert([
            ['id' => 1, 'naam' => 'Veganistisch', 'omschrijving' => 'Geen zuivelproducten en vlees'],
            ['id' => 2, 'naam' => 'Vegetarisch', 'omschrijving' => 'Geen varkensvlees'],
            ['id' => 3, 'naam' => 'Vegetarisch', 'omschrijving' => 'Geen vlees'],
            ['id' => 4, 'naam' => 'Geen beperkingen', 'omschrijving' => 'Geen beperkingen'],
        ]);
    }
}
