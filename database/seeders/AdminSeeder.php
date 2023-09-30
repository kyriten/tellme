<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'admin',
            'full_name' => 'Abimanyu Okysaputra Rachman',
            'email' => 'admin_it@setiajaya.toyota.id',
            'email_verified_at' => now(),
            'branch_office' => 'Depok',
            'department' => 'IT',
            'position' => 'Admin',
            'password' => Hash::make('12345678'),
        ])->assignRole('admin');
    }
}
