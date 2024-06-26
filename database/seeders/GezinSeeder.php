<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GezinSeeder extends Seeder
{
    public function run()
    {
        DB::table('gezin')->truncate();

        DB::table('gezin')->insert([
            ['id' => 1, 'naam' => 'Zevenhuizengezin', 'code' => 'G0001', 'aantal_volwassenen' => 2, 'aantal_kinderen' => 2, 'aantal_babys' => 0, 'totaal_aantal_personen' => 4],
            ['id' => 2, 'naam' => 'Sluitsgezin', 'code' => 'G0002', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 2, 'aantal_babys' => 0, 'totaal_aantal_personen' => 3],
            ['id' => 3, 'naam' => 'Bijstandgezin', 'code' => 'G0003', 'aantal_volwassenen' => 2, 'aantal_kinderen' => 0, 'aantal_babys' => 0, 'totaal_aantal_personen' => 2],
            ['id' => 4, 'naam' => 'Bijstandgezin', 'code' => 'G0004', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 0, 'aantal_babys' => 0, 'totaal_aantal_personen' => 1],
            ['id' => 5, 'naam' => 'Bijstandgezin', 'code' => 'G0005', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 0, 'aantal_babys' => 0, 'totaal_aantal_personen' => 1],
            ['id' => 6, 'naam' => 'Van der Berggezin', 'code' => 'G0006', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 0, 'aantal_babys' => 0, 'totaal_aantal_personen' => 1]
        ]);
    }
}
