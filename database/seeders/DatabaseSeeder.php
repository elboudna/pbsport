<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // run rolestable and typestable seeder
        $this->call([
            RolesTableSeeder::class,
            TypesTableSeeder::class,
        ]);
    }
}
