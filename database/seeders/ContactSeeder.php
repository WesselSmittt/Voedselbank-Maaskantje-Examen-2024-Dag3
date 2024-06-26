<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact')->insert([
            [
                'id' => 1,
                'straat' => 'Prinses Irenestraat',
                'huisnummer' => '12',
                'toevoeging' => 'A',
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'e.scherder@gmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 2,
                'straat' => 'Gibraltarstraat',
                'huisnummer' => '234',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'j.van.zevenhuizen@gmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 3,
                'straat' => 'Der Kinderenstraat',
                'huisnummer' => '456',
                'toevoeging' => 'Bis',
                'postcode' => '5271TJ',
                'woonplaats' => 'Maaskantje',
                'email' => 'a.bergkamp@hotmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 4,
                'straat' => 'Nachtegaalstraat',
                'huisnummer' => '233',
                'toevoeging' => 'A',
                'postcode' => '5271TJ',
                'woonplaats' => 'Maaskantje',
                'email' => 's.van.de.heuvel@gmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 5,
                'straat' => 'Bertram Russellstraat',
                'huisnummer' => '45',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'f.de.jong@hotmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 6,
                'straat' => 'Leonardo Da VinciHof',
                'huisnummer' => '34',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Maaskantje',
                'email' => 'h.van.der.berg@gmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 7,
                'straat' => 'Siegfried Knutsenlaan',
                'huisnummer' => '234',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Maaskantje',
                'email' => 'r.ter.weijden@ah.nl',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 8,
                'straat' => 'Theo de Bokstraat',
                'huisnummer' => '256',
                'toevoeging' => null,
                'postcode' => '5271ZH',
                'woonplaats' => 'Maaskantje',
                'email' => 'I.pastoor@gmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 9,
                'straat' => 'Meester van Leerhof',
                'huisnummer' => '2',
                'toevoeging' => 'A',
                'postcode' => '5271ZH',
                'woonplaats' => 'Maaskantje',
                'email' => 'm.yazidi@gemeenteutrecht.nl',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 10,
                'straat' => 'Van Wemelenplantsoen',
                'huisnummer' => '300',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'b.van.driel@gmail.com',
                'telefoonnummer' => '+31 623456123',
            ],
            [
                'id' => 11,
                'straat' => 'Terlingenhof',
                'huisnummer' => '20',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'j.pastorius@gmail.com',
                'telefoonnummer' => '+31 623456356',
            ],
            [
                'id' => 12,
                'straat' => 'Veldhoen',
                'huisnummer' => '31',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Maaskantje',
                'email' => 's.dollaard@gmail.com',
                'telefoonnummer' => '+31 623452314',
            ],
            [
                'id' => 13,
                'straat' => 'ScheringaDreef',
                'huisnummer' => '37',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Vught',
                'email' => 'j.blokker@gemeentevught.nl',
                'telefoonnummer' => '+31 623452314',
            ],
        ]);
    }
}
