<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ CORRETTO: chiama qui i tuoi seeder
        $this->call([
            TrainSeeder::class,
        ]);
    }
}
