<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersoonSeeder extends Seeder
{
    public function run()
    {
        DB::table('persoon')->truncate();

        DB::table('persoon')->insert([
            ['id' => 1, 'gezin_id' => 1, 'voornaam' => 'Johan', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1985-02-10', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 2, 'gezin_id' => 1, 'voornaam' => 'Jantien', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1988-04-30', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 3, 'gezin_id' => 1, 'voornaam' => 'Janneke', 'tussenvoegsel' => '', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2009-05-11', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 4, 'gezin_id' => 1, 'voornaam' => 'Stefke', 'tussenvoegsel' => '', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2016-03-20', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 5, 'gezin_id' => 2, 'voornaam' => 'Stahn', 'tussenvoegsel' => 'van der', 'achternaam' => 'Leuwen', 'geboortedatum' => '1966-09-12', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 6, 'gezin_id' => 2, 'voornaam' => 'Sara', 'tussenvoegsel' => '', 'achternaam' => 'van der Leuwen', 'geboortedatum' => '2015-03-08', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 7, 'gezin_id' => 3, 'voornaam' => 'Jan', 'tussenvoegsel' => 'van', 'achternaam' => 'Bergkamp', 'geboortedatum' => '1980-02-20', 'type_persoon' => 'Medewerker', 'IsVertegenwoordiger' => 1],
            ['id' => 8, 'gezin_id' => 3, 'voornaam' => 'Janine', 'tussenvoegsel' => 'van', 'achternaam' => 'Bergkamp', 'geboortedatum' => '2008-09-01', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 9, 'gezin_id' => 3, 'voornaam' => 'Thian', 'tussenvoegsel' => 'van', 'achternaam' => 'Bergkamp', 'geboortedatum' => '2010-10-10', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 10, 'gezin_id' => 4, 'voornaam' => 'Hans', 'tussenvoegsel' => '', 'achternaam' => 'van de Heuvel', 'geboortedatum' => '2000-04-07', 'type_persoon' => 'Vrijwilliger', 'IsVertegenwoordiger' => 1],
            ['id' => 11, 'gezin_id' => 4, 'voornaam' => 'Stefke', 'tussenvoegsel' => '', 'achternaam' => 'van de Heuvel', 'geboortedatum' => '1985-09-04', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 12, 'gezin_id' => 5, 'voornaam' => 'Judith', 'tussenvoegsel' => 'van', 'achternaam' => 'de Jong', 'geboortedatum' => '1999-09-09', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 13, 'gezin_id' => 5, 'voornaam' => 'Mazijn', 'tussenvoegsel' => '', 'achternaam' => 'van de Jong', 'geboortedatum' => '2004-03-01', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 14, 'gezin_id' => 6, 'voornaam' => 'Felicia', 'tussenvoegsel' => '', 'achternaam' => 'Schreder', 'geboortedatum' => '1980-09-04', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 15, 'gezin_id' => 6, 'voornaam' => 'Eva', 'tussenvoegsel' => '', 'achternaam' => 'Schreder', 'geboortedatum' => '2004-01-29', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 16, 'gezin_id' => 6, 'voornaam' => 'Saïna', 'tussenvoegsel' => '', 'achternaam' => 'Schreder', 'geboortedatum' => '2021-11-29', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 17, 'gezin_id' => 6, 'voornaam' => 'Frieda', 'tussenvoegsel' => '', 'achternaam' => 'van der Berg', 'geboortedatum' => '1988-09-04', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 1],
            ['id' => 18, 'gezin_id' => 6, 'voornaam' => 'Simon', 'tussenvoegsel' => '', 'achternaam' => 'van der Berg', 'geboortedatum' => '2018-05-23', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
            ['id' => 19, 'gezin_id' => 6, 'voornaam' => 'Hanna', 'tussenvoegsel' => '', 'achternaam' => 'van der Berg', 'geboortedatum' => '1999-09-09', 'type_persoon' => 'Klant', 'IsVertegenwoordiger' => 0],
        ]);
    }
}
