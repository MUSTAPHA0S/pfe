<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'nom' => 'admin',
            'isAdmin' => true,
            'email' => 'admin2@gmail.ma',
            'password' => Hash::make('00000000'),
        ])->assignRole("admin");
    }
}
