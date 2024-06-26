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
            ['naam' => 'ZevenhuizenGezin', 'code' => 'G0001', 'aantal_volwassenen' => 2, 'aantal_kinderen' => 2, 'aantal_babys' => 0, 'totaal_aantal_personen' => 4, 'omschrijving' => 'Bijstandsgezin'],
            ['naam' => 'BergkampGezin', 'code' => 'G0002', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 2, 'aantal_babys' => 1, 'totaal_aantal_personen' => 4, 'omschrijving' => 'Bijstandsgezin'],
            ['naam' => 'HeuvelGezin', 'code' => 'G0003', 'aantal_volwassenen' => 2, 'aantal_kinderen' => 0, 'aantal_babys' => 0, 'totaal_aantal_personen' => 2, 'omschrijving' => 'Bijstandsgezin'],
            ['naam' => 'ScherderGezin', 'code' => 'G0004', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 0, 'aantal_babys' => 2, 'totaal_aantal_personen' => 3, 'omschrijving' => 'Bijstandsgezin'],
            ['naam' => 'DeJongGezin', 'code' => 'G0005', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 1, 'aantal_babys' => 0, 'totaal_aantal_personen' => 2, 'omschrijving' => 'Bijstandsgezin'],
            ['naam' => 'VanderBerggezin', 'code' => 'G0006', 'aantal_volwassenen' => 1, 'aantal_kinderen' => 0, 'aantal_babys' => 0, 'totaal_aantal_personen' => 1, 'omschrijving' => 'Alleengaande']
        ]);
    }
}
