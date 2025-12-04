<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Registro;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User 1',
            'email' => 'user1@teste.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'User 2',
            'email' => 'user2@teste.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'User 3',
            'email' => 'user3@teste.com',
            'password' => Hash::make('123456')
        ]);

        $this->call([
            AmbienteSeeder::class,
            SensorSeeder::class,
            RegistroSeeder::class
        ]);
    }
}
