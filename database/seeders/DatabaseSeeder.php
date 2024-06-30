<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Categorieen;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(ContactPerLeverancierSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(LeverancierSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductPerLeverancierSeeder::class);
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            Categorieen::class,
            Producten::class,
            Magazijnen::class,
            ProductenPerMagazijn::class,
        ]);
    }
}
