<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('product')->insert([
            ['id' => 1, 'categorie_id' => 1, 'naam' => 'Aardappel', 'soort_allergie' => NULL, 'barcode' => '8715987321239', 'houdbaarheidsdatum' => '2024-07-12', 'omschrijving' => 'Kruimige aardappel', 'status' => 'OpVoorraad'],
            ['id' => 2, 'categorie_id' => 1, 'naam' => 'Aardappel', 'soort_allergie' => NULL, 'barcode' => '8715987321322', 'houdbaarheidsdatum' => '2024-07-12', 'omschrijving' => 'Kruimige aardappel', 'status' => 'OpVoorraad'],
            ['id' => 3, 'categorie_id' => 2, 'naam' => 'Ui', 'soort_allergie' => NULL, 'barcode' => '8719487321336', 'houdbaarheidsdatum' => '2024-07-23', 'omschrijving' => 'Grote ui', 'status' => 'OpVoorraad'],
            ['id' => 4, 'categorie_id' => 2, 'naam' => 'Appel', 'soort_allergie' => NULL, 'barcode' => '8719487321343', 'houdbaarheidsdatum' => '2024-08-12', 'omschrijving' => 'Biologische appel', 'status' => 'OpVoorraad'],
            ['id' => 5, 'categorie_id' => 2, 'naam' => 'Banaan', 'soort_allergie' => NULL, 'barcode' => '8719487321350', 'houdbaarheidsdatum' => '2024-08-14', 'omschrijving' => 'Biologische banaan', 'status' => 'NietOpVoorraad'],
            ['id' => 6, 'categorie_id' => 3, 'naam' => 'Kaas', 'soort_allergie' => 'Lactose', 'barcode' => '8719487321367', 'houdbaarheidsdatum' => '2024-09-19', 'omschrijving' => 'Goudse kaas', 'status' => 'OpVoorraad'],
            ['id' => 7, 'categorie_id' => 3, 'naam' => 'Rosbief', 'soort_allergie' => NULL, 'barcode' => '8719487321374', 'houdbaarheidsdatum' => '2024-07-23', 'omschrijving' => 'Rosbief', 'status' => 'OpVoorraad'],
            ['id' => 8, 'categorie_id' => 3, 'naam' => 'Melk', 'soort_allergie' => 'Lactose', 'barcode' => '8719487321381', 'houdbaarheidsdatum' => '2024-07-23', 'omschrijving' => 'Volle melk', 'status' => 'OpVoorraad'],
            ['id' => 9, 'categorie_id' => 3, 'naam' => 'Margarine', 'soort_allergie' => NULL, 'barcode' => '8719487321398', 'houdbaarheidsdatum' => '2024-08-02', 'omschrijving' => 'Plantaardige margarine', 'status' => 'OpVoorraad'],
            ['id' => 10, 'categorie_id' => 3, 'naam' => 'Ei', 'soort_allergie' => NULL, 'barcode' => '8719487321404', 'houdbaarheidsdatum' => '2024-08-04', 'omschrijving' => 'Kippen ei', 'status' => 'OpVoorraad'],
            ['id' => 11, 'categorie_id' => 3, 'naam' => 'Brood', 'soort_allergie' => 'Gluten', 'barcode' => '8719487321411', 'houdbaarheidsdatum' => '2024-07-07', 'omschrijving' => 'Tarwe brood', 'status' => 'OpVoorraad'],
            ['id' => 12, 'categorie_id' => 3, 'naam' => 'Gevulde Koek', 'soort_allergie' => 'Amandel', 'barcode' => '8719487321428', 'houdbaarheidsdatum' => '2024-09-04', 'omschrijving' => 'Gevulde koek', 'status' => 'OpVoorraad'],
            ['id' => 13, 'categorie_id' => 4, 'naam' => 'Fristi', 'soort_allergie' => 'Lactose', 'barcode' => '8719487321435', 'houdbaarheidsdatum' => '2024-10-28', 'omschrijving' => 'Fristi', 'status' => 'OpVoorraad'],
            ['id' => 14, 'categorie_id' => 4, 'naam' => 'Koffie', 'soort_allergie' => 'Caffeïne', 'barcode' => '8719487321442', 'houdbaarheidsdatum' => '2024-10-19', 'omschrijving' => 'Arabica koffie', 'status' => 'OpVoorraad'],
            ['id' => 15, 'categorie_id' => 4, 'naam' => 'Thee', 'soort_allergie' => 'Theïne', 'barcode' => '8719487321459', 'houdbaarheidsdatum' => '2024-10-23', 'omschrijving' => 'Ceylon thee', 'status' => 'OpVoorraad'],
            ['id' => 16, 'categorie_id' => 5, 'naam' => 'Rijst', 'soort_allergie' => 'Gluten', 'barcode' => '8719487321466', 'houdbaarheidsdatum' => '2024-12-16', 'omschrijving' => 'Basmati rijst', 'status' => 'OpVoorraad'],
            ['id' => 17, 'categorie_id' => 5, 'naam' => 'Knorr Nasi Mix', 'soort_allergie' => NULL, 'barcode' => '8719487321473', 'houdbaarheidsdatum' => '2024-12-13', 'omschrijving' => 'Nasi kruiden', 'status' => 'OpVoorraad'],
            ['id' => 18, 'categorie_id' => 5, 'naam' => 'Tomatensoep', 'soort_allergie' => NULL, 'barcode' => '8719487321480', 'houdbaarheidsdatum' => '2024-12-23', 'omschrijving' => 'Nasi tomatensoep', 'status' => 'OpVoorraad'],
            ['id' => 19, 'categorie_id' => 5, 'naam' => 'Tomatensaus', 'soort_allergie' => NULL, 'barcode' => '8719487321497', 'houdbaarheidsdatum' => '2024-12-21', 'omschrijving' => 'Biologische tomatensaus', 'status' => 'OpVoorraad'],
            ['id' => 20, 'categorie_id' => 5, 'naam' => 'Peterselie', 'soort_allergie' => NULL, 'barcode' => '8719487321503', 'houdbaarheidsdatum' => '2024-07-31', 'omschrijving' => 'Verse kruidenpot', 'status' => 'OpVoorraad'],
            ['id' => 21, 'categorie_id' => 5, 'naam' => 'Olie', 'soort_allergie' => NULL, 'barcode' => '8719487321510', 'houdbaarheidsdatum' => '2024-12-27', 'omschrijving' => 'Olijfolie', 'status' => 'OpVoorraad'],
            ['id' => 22, 'categorie_id' => 6, 'naam' => 'Mars', 'soort_allergie' => NULL, 'barcode' => '8719487321527', 'houdbaarheidsdatum' => '2024-12-11', 'omschrijving' => 'Snoep', 'status' => 'OpVoorraad'],
            ['id' => 23, 'categorie_id' => 6, 'naam' => 'Biscuit', 'soort_allergie' => NULL, 'barcode' => '8719487321534', 'houdbaarheidsdatum' => '2024-08-07', 'omschrijving' => 'San Francisco biscuit', 'status' => 'OpVoorraad'],
            ['id' => 24, 'categorie_id' => 6, 'naam' => 'Paprika Chips', 'soort_allergie' => NULL, 'barcode' => '8719487321541', 'houdbaarheidsdatum' => '2024-12-22', 'omschrijving' => 'Ribbelchips paprika', 'status' => 'OpVoorraad'],
            ['id' => 25, 'categorie_id' => 6, 'naam' => 'Chocolade reep', 'soort_allergie' => 'Cacoa', 'barcode' => '8719487321558', 'houdbaarheidsdatum' => '2024-11-21', 'omschrijving' => 'Tony Chocolonely', 'status' => 'OpVoorraad']
        ]);
    }
}
