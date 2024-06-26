<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Producten extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $producten = [
            ['id' => 1, 'categorie_id' => 1, 'naam' => 'Aardappel', 'soort_allergie' => null, 'barcode' => '8719487321239', 'houdbaarheidsdatum' => '2024-07-12', 'omschrijving' => 'Kruimige aardappel', 'status' => 'OpVoorraad'],
            ['id' => 2, 'categorie_id' => 1, 'naam' => 'Aardappel', 'soort_allergie' => null, 'barcode' => '8719487321246', 'houdbaarheidsdatum' => '2024-07-26', 'omschrijving' => 'Kruimige aardappel', 'status' => 'OpVoorraad'],
            ['id' => 3, 'categorie_id' => 1, 'naam' => 'Ui', 'soort_allergie' => null, 'barcode' => '8719487321133', 'houdbaarheidsdatum' => '2024-09-02', 'omschrijving' => 'Gele ui', 'status' => 'OpVoorraad'],
            ['id' => 4, 'categorie_id' => 1, 'naam' => 'Appel', 'soort_allergie' => null, 'barcode' => '8719487323133', 'houdbaarheidsdatum' => '2024-08-16', 'omschrijving' => 'Granny Smith', 'status' => 'NietOpVoorraad'],
            ['id' => 5, 'categorie_id' => 1, 'naam' => 'Appel', 'soort_allergie' => null, 'barcode' => '8719487323134', 'houdbaarheidsdatum' => '2024-08-18', 'omschrijving' => 'Granny Smith', 'status' => 'NietLeverbaar'],
            ['id' => 6, 'categorie_id' => 1, 'naam' => 'Banaan', 'soort_allergie' => 'Banaan', 'barcode' => '8719484321326', 'houdbaarheidsdatum' => '2024-07-12', 'omschrijving' => 'Biologische Banaan', 'status' => 'OverHoudbaarheidsDatum'],
            ['id' => 7, 'categorie_id' => 1, 'naam' => 'Banaan', 'soort_allergie' => 'Banaan', 'barcode' => '8719484321336', 'houdbaarheidsdatum' => '2024-07-19', 'omschrijving' => 'Biologische Banaan', 'status' => 'OverHoudbaarheidsDatum'],
            ['id' => 8, 'categorie_id' => 2, 'naam' => 'Kaas', 'soort_allergie' => 'Lactose', 'barcode' => '8719484321336', 'houdbaarheidsdatum' => '2024-07-19', 'omschrijving' => 'Jonge Kaas', 'status' => 'OpVoorraad'],
            ['id' => 9, 'categorie_id' => 2, 'naam' => 'Rosbief', 'soort_allergie' => null, 'barcode' => '8719484321331', 'houdbaarheidsdatum' => '2024-07-23', 'omschrijving' => 'Rundvlees', 'status' => 'OpVoorraad'],
            ['id' => 10, 'categorie_id' => 3, 'naam' => 'Melk', 'soort_allergie' => 'Lactose', 'barcode' => '8719484321331', 'houdbaarheidsdatum' => '2024-07-23', 'omschrijving' => 'Halfvolle melk', 'status' => 'OpVoorraad'],
            ['id' => 11, 'categorie_id' => 3, 'naam' => 'Margarine', 'soort_allergie' => null, 'barcode' => '8719484321333', 'houdbaarheidsdatum' => '2024-08-23', 'omschrijving' => 'Plantaardige boter', 'status' => 'OpVoorraad'],
            ['id' => 12, 'categorie_id' => 3, 'naam' => 'Ei', 'soort_allergie' => 'Eieren', 'barcode' => '8719484321337', 'houdbaarheidsdatum' => '2024-04-07', 'omschrijving' => 'Scharrelei', 'status' => 'OpVoorraad'],
            ['id' => 13, 'categorie_id' => 4, 'naam' => 'Brood', 'soort_allergie' => 'Gluten', 'barcode' => '8719484321338', 'houdbaarheidsdatum' => '2024-04-07', 'omschrijving' => 'Volkoren brood', 'status' => 'OpVoorraad'],
            ['id' => 14, 'categorie_id' => 4, 'naam' => 'Gevulde Koek', 'soort_allergie' => 'Amandel', 'barcode' => '8719484321333', 'houdbaarheidsdatum' => '2024-04-05', 'omschrijving' => 'Banketbakkers kwaliteit', 'status' => 'OpVoorraad'],
            ['id' => 15, 'categorie_id' => 5, 'naam' => 'Fristi', 'soort_allergie' => 'Lactose', 'barcode' => '8719484321339', 'houdbaarheidsdatum' => '2024-10-28', 'omschrijving' => 'Frisdrank', 'status' => 'NietOpVoorraad'],
            ['id' => 16, 'categorie_id' => 5, 'naam' => 'Appelsap', 'soort_allergie' => null, 'barcode' => '8719484321340', 'houdbaarheidsdatum' => '2024-08-10', 'omschrijving' => '100% vruchtensap', 'status' => 'OverHoudbaarheidsDatum'],
            ['id' => 17, 'categorie_id' => 5, 'naam' => 'Koffie', 'soort_allergie' => 'Caffeine', 'barcode' => '8719484321339', 'houdbaarheidsdatum' => '2024-08-14', 'omschrijving' => 'Arabica koffie', 'status' => 'OpVoorraad'],
            ['id' => 18, 'categorie_id' => 5, 'naam' => 'Thee', 'soort_allergie' => 'Theïne', 'barcode' => '8719484321393', 'houdbaarheidsdatum' => '2024-09-02', 'omschrijving' => 'Ceylon thee', 'status' => 'OpVoorraad'],
            ['id' => 19, 'categorie_id' => 6, 'naam' => 'Pasta', 'soort_allergie' => 'Gluten', 'barcode' => '8719484321395', 'houdbaarheidsdatum' => '2024-12-16', 'omschrijving' => 'Macaroni', 'status' => 'NietLeverbaar'],
            ['id' => 20, 'categorie_id' => 6, 'naam' => 'Rijst', 'soort_allergie' => null, 'barcode' => '8719487321332', 'houdbaarheidsdatum' => '2024-12-25', 'omschrijving' => 'Basmati Rijst', 'status' => 'NietLeverbaar'],
            ['id' => 21, 'categorie_id' => 6, 'naam' => 'Knorr Nasi Mix', 'soort_allergie' => null, 'barcode' => '8719487321332', 'houdbaarheidsdatum' => '2024-12-25', 'omschrijving' => 'Nasi kruiden', 'status' => 'OpVoorraad'],
            ['id' => 22, 'categorie_id' => 7, 'naam' => 'Tomatensoep', 'soort_allergie' => null, 'barcode' => '8719487321337', 'houdbaarheidsdatum' => '2024-12-13', 'omschrijving' => 'Romige tomatensoep', 'status' => 'OpVoorraad'],
            ['id' => 23, 'categorie_id' => 7, 'naam' => 'Tomatensaus', 'soort_allergie' => null, 'barcode' => '8719487321334', 'houdbaarheidsdatum' => '2024-12-11', 'omschrijving' => 'Pizza saus', 'status' => 'NietOpVoorraad'],
            ['id' => 24, 'categorie_id' => 7, 'naam' => 'Peterselie', 'soort_allergie' => null, 'barcode' => '8719487321337', 'houdbaarheidsdatum' => '2024-07-31', 'omschrijving' => 'Verse kruidenpot', 'status' => 'NietLeverbaar'],
            ['id' => 25, 'categorie_id' => 7, 'naam' => 'Olie', 'soort_allergie' => null, 'barcode' => '8719487321333', 'houdbaarheidsdatum' => '2024-07-31', 'omschrijving' => 'Olijfolie', 'status' => 'NietOpVoorraad'],
            ['id' => 26, 'categorie_id' => 8, 'naam' => 'Mars', 'soort_allergie' => null, 'barcode' => '8719487321337', 'houdbaarheidsdatum' => '2024-12-11', 'omschrijving' => 'Snoep', 'status' => 'OpVoorraad'],
            ['id' => 27, 'categorie_id' => 8, 'naam' => 'Biscuit', 'soort_allergie' => 'Gluten', 'barcode' => '8719487321339', 'houdbaarheidsdatum' => '2024-12-15', 'omschrijving' => 'San Francisco biscuit', 'status' => 'OpVoorraad'],
            ['id' => 28, 'categorie_id' => 8, 'naam' => 'Paprika Chips', 'soort_allergie' => null, 'barcode' => '8719487321339', 'houdbaarheidsdatum' => '2024-12-22', 'omschrijving' => 'Ribbelchips paprika', 'status' => 'OpVoorraad'],
            ['id' => 29, 'categorie_id' => 8, 'naam' => 'Chocolade reep', 'soort_allergie' => 'Cacao', 'barcode' => '8719487321533', 'houdbaarheidsdatum' => '2024-11-21', 'omschrijving' => 'Tony Chocolonely', 'status' => 'OpVoorraad']
        ];

        foreach ($producten as $product) {
            Product::create($product);
        }
    }
}