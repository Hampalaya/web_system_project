<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'fullname' => 'Cuevas Owner', // Change this to your name
            'email' => 'cuevas.school.project@gmail.com', // Change to your email
            'password' => Hash::make('SchoolProject00!'), // Change to a secure password
            'status' => 'active',
            'phone' => '09684976467' // Change to your phone
        ]);

        $admin->assignRole('admin');
    }
}
