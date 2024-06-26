<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersoonSeeder extends Seeder
{
    public function run()
    {
        DB::table('persoon')->insert([
            ['id' => 1, 'gezin_id' => 1, 'voornaam' => 'Johan', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1980-05-20', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 2, 'gezin_id' => 1, 'voornaam' => 'Janneke', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1985-03-20', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 3, 'gezin_id' => 1, 'voornaam' => 'Thijs', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2010-02-15', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 4, 'gezin_id' => 1, 'voornaam' => 'Sanne', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2016-09-04', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 5, 'gezin_id' => 2, 'voornaam' => 'Eva', 'tussenvoegsel' => NULL, 'achternaam' => 'Sluits', 'geboortedatum' => '2000-04-07', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 6, 'gezin_id' => 2, 'voornaam' => 'Felicia', 'tussenvoegsel' => NULL, 'achternaam' => 'Sluits', 'geboortedatum' => '2006-09-01', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 7, 'gezin_id' => 3, 'voornaam' => 'Simon', 'tussenvoegsel' => NULL, 'achternaam' => 'Bergkamp', 'geboortedatum' => '1990-02-20', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 8, 'gezin_id' => 3, 'voornaam' => 'Judith', 'tussenvoegsel' => NULL, 'achternaam' => 'Bergkamp', 'geboortedatum' => '1995-04-30', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 9, 'gezin_id' => 4, 'voornaam' => 'Mazin', 'tussenvoegsel' => NULL, 'achternaam' => 'Ali', 'geboortedatum' => '1986-09-04', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 10, 'gezin_id' => 5, 'voornaam' => 'Jan', 'tussenvoegsel' => 'van der', 'achternaam' => 'Heijden', 'geboortedatum' => '1985-08-18', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 11, 'gezin_id' => 6, 'voornaam' => 'Hanna', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '1999-09-09', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1]
        ]);
    }
}
