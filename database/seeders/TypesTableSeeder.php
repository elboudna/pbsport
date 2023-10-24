<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert the predefined types
        DB::table('produit_types')->insert([
            ['id' => 1, 'type' => 'Vetement'],
            ['id' => 2, 'type' => 'Chaussure'],
            ['id' => 3, 'type' => 'Raquette'],
            ['id' => 4, 'type' => 'Balle'],
            ['id' => 5, 'type' => 'Accessoire'],
            ['id' => 6, 'type' => 'Sac'],
            ['id' => 7, 'type' => 'Autre'],
        ]);
    }
}
