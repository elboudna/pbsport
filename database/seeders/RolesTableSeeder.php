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
            ['id' => 1, 'role' => 'Joueur'],
            ['id' => 2, 'role' => 'Coach'],
            ['id' => 3, 'role' => 'Admin'],
        ]);
    }
}
