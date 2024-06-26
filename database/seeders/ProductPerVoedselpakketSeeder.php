<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerVoedselpakketSeeder extends Seeder
{
    public function run()
    {
        DB::table('productpervoedselpakket')->insert([
            ['id' => 1, 'voedselpakket_id' => 1, 'product_id' => 1, 'aantal_product_eenheden' => 2],
            ['id' => 2, 'voedselpakket_id' => 1, 'product_id' => 2, 'aantal_product_eenheden' => 1],
            ['id' => 3, 'voedselpakket_id' => 1, 'product_id' => 3, 'aantal_product_eenheden' => 3],
            ['id' => 4, 'voedselpakket_id' => 1, 'product_id' => 4, 'aantal_product_eenheden' => 2],
            ['id' => 5, 'voedselpakket_id' => 1, 'product_id' => 5, 'aantal_product_eenheden' => 2],
            ['id' => 6, 'voedselpakket_id' => 2, 'product_id' => 6, 'aantal_product_eenheden' => 1],
            ['id' => 7, 'voedselpakket_id' => 2, 'product_id' => 7, 'aantal_product_eenheden' => 1],
            ['id' => 8, 'voedselpakket_id' => 2, 'product_id' => 8, 'aantal_product_eenheden' => 1],
            ['id' => 9, 'voedselpakket_id' => 2, 'product_id' => 9, 'aantal_product_eenheden' => 1],
            ['id' => 10, 'voedselpakket_id' => 2, 'product_id' => 10, 'aantal_product_eenheden' => 2],
            ['id' => 11, 'voedselpakket_id' => 3, 'product_id' => 11, 'aantal_product_eenheden' => 1],
            ['id' => 12, 'voedselpakket_id' => 3, 'product_id' => 12, 'aantal_product_eenheden' => 2],
            ['id' => 13, 'voedselpakket_id' => 3, 'product_id' => 13, 'aantal_product_eenheden' => 1],
            ['id' => 14, 'voedselpakket_id' => 3, 'product_id' => 14, 'aantal_product_eenheden' => 1],
            ['id' => 15, 'voedselpakket_id' => 3, 'product_id' => 15, 'aantal_product_eenheden' => 2],
            ['id' => 16, 'voedselpakket_id' => 3, 'product_id' => 16, 'aantal_product_eenheden' => 1],
            ['id' => 17, 'voedselpakket_id' => 3, 'product_id' => 17, 'aantal_product_eenheden' => 1],
            ['id' => 18, 'voedselpakket_id' => 3, 'product_id' => 18, 'aantal_product_eenheden' => 1],
            ['id' => 19, 'voedselpakket_id' => 3, 'product_id' => 19, 'aantal_product_eenheden' => 1],
            ['id' => 20, 'voedselpakket_id' => 3, 'product_id' => 20, 'aantal_product_eenheden' => 1],
            ['id' => 21, 'voedselpakket_id' => 3, 'product_id' => 21, 'aantal_product_eenheden' => 1],
            ['id' => 22, 'voedselpakket_id' => 3, 'product_id' => 22, 'aantal_product_eenheden' => 1],
            ['id' => 23, 'voedselpakket_id' => 3, 'product_id' => 23, 'aantal_product_eenheden' => 1],
            ['id' => 24, 'voedselpakket_id' => 3, 'product_id' => 24, 'aantal_product_eenheden' => 1],
            ['id' => 25, 'voedselpakket_id' => 3, 'product_id' => 25, 'aantal_product_eenheden' => 1]
        ]);
    }
}
