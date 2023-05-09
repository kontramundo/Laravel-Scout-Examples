<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Role };

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(['name' => 'Administrator']);
        Role::updateOrCreate(['name' => 'Supervisor']);
        Role::updateOrCreate(['name' => 'Manager']);
        Role::updateOrCreate(['name' => 'Client']);
    }
}
