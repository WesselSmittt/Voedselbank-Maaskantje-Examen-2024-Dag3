<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('leverancier')->insert([
            [
                'id' => 1,
                'naam' => 'Albert Heijn',
                'contactpersoon' => 'Ruud ter Weijden',
                'leveranciernummer' => 'L0001',
                'leveranciertype' => 'Bedrijf',
            ],
            [
                'id' => 2,
                'naam' => 'Albertus Kerk',
                'contactpersoon' => 'Leo Pastoor',
                'leveranciernummer' => 'L0002',
                'leveranciertype' => 'Instelling',
            ],
            [
                'id' => 3,
                'naam' => 'Gemeente Utrecht',
                'contactpersoon' => 'Mohammed Yazidi',
                'leveranciernummer' => 'L0003',
                'leveranciertype' => 'Overheid',
            ],
            [
                'id' => 4,
                'naam' => 'Boerderij Meerhoven',
                'contactpersoon' => 'Bertus van Driel',
                'leveranciernummer' => 'L0004',
                'leveranciertype' => 'Particulier',
            ],
            [
                'id' => 5,
                'naam' => 'Jan van der Heijden',
                'contactpersoon' => 'Jan van der Heijden',
                'leveranciernummer' => 'L0005',
                'leveranciertype' => 'Donor',
            ],
            [
                'id' => 6,
                'naam' => 'Vomar',
                'contactpersoon' => 'Jaco Pastorius',
                'leveranciernummer' => 'L0006',
                'leveranciertype' => 'Bedrijf',
            ],
            [
                'id' => 7,
                'naam' => 'DekaMarkt',
                'contactpersoon' => 'Sil den Dollaard',
                'leveranciernummer' => 'L0007',
                'leveranciertype' => 'Bedrijf',
            ],
            [
                'id' => 8,
                'naam' => 'Gemeente Vught',
                'contactpersoon' => 'Jan Blokker',
                'leveranciernummer' => 'L0008',
                'leveranciertype' => 'Overheid',
            ],
        ]);
    }
}
