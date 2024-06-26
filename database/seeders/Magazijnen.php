<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Magazijn;

class Magazijnen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $magazijnen = [
            ['id' => 1, 'ontvangstdatum' => '2024-05-12', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '5 kg', 'aantal' => 20],
            ['id' => 2, 'ontvangstdatum' => '2024-05-26', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '2.5 kg', 'aantal' => 40],
            ['id' => 3, 'ontvangstdatum' => '2024-04-15', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1 kg', 'aantal' => 30],
            ['id' => 4, 'ontvangstdatum' => '2024-05-12', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1.5 kg', 'aantal' => 75],
            ['id' => 5, 'ontvangstdatum' => '2024-04-13', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '4 stuks', 'aantal' => 25],
            ['id' => 6, 'ontvangstdatum' => '2024-04-17', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '150 ml', 'aantal' => 130],
            ['id' => 7, 'ontvangstdatum' => '2024-04-30', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1 liter', 'aantal' => 72],
            ['id' => 8, 'ontvangstdatum' => '2024-04-19', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '250 g', 'aantal' => 180],
            ['id' => 9, 'ontvangstdatum' => '2024-04-23', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '6 stuks', 'aantal' => 120],
            ['id' => 10, 'ontvangstdatum' => '2024-03-16', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1 kg', 'aantal' => 280],
            ['id' => 11, 'ontvangstdatum' => '2024-04-04', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '500 g', 'aantal' => 230],
            ['id' => 12, 'ontvangstdatum' => '2024-04-28', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '2 kg', 'aantal' => 34],
            ['id' => 13, 'ontvangstdatum' => '2024-04-19', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1 l', 'aantal' => 46],
            ['id' => 14, 'ontvangstdatum' => '2024-04-23', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '250 ml', 'aantal' => 98],
            ['id' => 15, 'ontvangstdatum' => '2024-03-16', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1 potje', 'aantal' => 56],
            ['id' => 16, 'ontvangstdatum' => '2024-03-23', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '1 l', 'aantal' => 210],
            ['id' => 17, 'ontvangstdatum' => '2024-04-30', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '4 stuks', 'aantal' => 24],
            ['id' => 18, 'ontvangstdatum' => '2024-04-07', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '300 g', 'aantal' => 87],
            ['id' => 19, 'ontvangstdatum' => '2024-04-21', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '200 g', 'aantal' => 230],
            ['id' => 20, 'ontvangstdatum' => '2024-04-14', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '80 g', 'aantal' => 30],
            ['id' => 21, 'ontvangstdatum' => '2024-04-20', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '500 g', 'aantal' => 220],
            ['id' => 22, 'ontvangstdatum' => '2024-04-18', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '150 g', 'aantal' => 50],
            ['id' => 23, 'ontvangstdatum' => '2024-04-10', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '200 ml', 'aantal' => 70],
            ['id' => 24, 'ontvangstdatum' => '2024-04-05', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '300 ml', 'aantal' => 100],
            ['id' => 25, 'ontvangstdatum' => '2024-04-08', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '350 g', 'aantal' => 150],
            ['id' => 26, 'ontvangstdatum' => '2024-04-12', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '400 g', 'aantal' => 200],
            ['id' => 27, 'ontvangstdatum' => '2024-04-14', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '250 ml', 'aantal' => 60],
            ['id' => 28, 'ontvangstdatum' => '2024-04-22', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '300 g', 'aantal' => 87],
            ['id' => 29, 'ontvangstdatum' => '2024-04-21', 'uitleveringsdatum' => null, 'verpakkingseenheid' => '80 g', 'aantal' => 30],
        ];
        foreach ($magazijnen as $magazijn) {
            Magazijn::create($magazijn);
        }
    }
}