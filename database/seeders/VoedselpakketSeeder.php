<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoedselpakketSeeder extends Seeder
{
    public function run()
    {
        DB::table('voedselpakket')->insert([
            ['id' => 1, 'gezin_id' => 1, 'pakket_nummer' => 1, 'datum_samenstelling' => '2024-04-06', 'datum_uitgifte' => '2024-04-07', 'status' => 'Uitgereikt'],
            ['id' => 2, 'gezin_id' => 1, 'pakket_nummer' => 2, 'datum_samenstelling' => '2024-04-13', 'datum_uitgifte' => NULL, 'status' => 'NietUitgereikt'],
            ['id' => 3, 'gezin_id' => 1, 'pakket_nummer' => 3, 'datum_samenstelling' => '2024-04-20', 'datum_uitgifte' => NULL, 'status' => 'NietMeerGegeven'],
            ['id' => 4, 'gezin_id' => 2, 'pakket_nummer' => 4, 'datum_samenstelling' => '2024-04-06', 'datum_uitgifte' => '2024-04-07', 'status' => 'Uitgereikt'],
            ['id' => 5, 'gezin_id' => 2, 'pakket_nummer' => 5, 'datum_samenstelling' => '2024-04-13', 'datum_uitgifte' => '2024-04-14', 'status' => 'Uitgereikt'],
            ['id' => 6, 'gezin_id' => 2, 'pakket_nummer' => 6, 'datum_samenstelling' => '2024-04-20', 'datum_uitgifte' => NULL, 'status' => 'NietUitgereikt'],

        ]);
    }
}
