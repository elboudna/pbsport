<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert the predefined roles
        DB::table('roles')->insert([
            ['id' => 1, 'role' => 'Vetement'],
            ['id' => 2, 'role' => 'Chaussures'],
            ['id' => 3, 'role' => 'Raquette'],
            ['id' => 4, 'role' => 'Balle'],
            ['id' => 5, 'role' => 'Accessoire'],
            ['id' => 6, 'role' => 'Sac'],
            ['id' => 7, 'role' => 'Autre'],
        ]);
    }
}
