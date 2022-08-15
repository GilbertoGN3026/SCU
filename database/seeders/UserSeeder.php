<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Salas de Computo',
            'email' => 'salasdecomputofacico@gmail.com',
            'password' => bcrypt('salasFaCiCo')
        ])->assignRole('Admin');
    }
}