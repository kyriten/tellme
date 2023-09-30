<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'kyriten',
            'full_name' => 'Abimanyu Okysaputra Rachman',
            'email' => 'abimanyu@setiajaya.toyota.id',
            'email_verified_at' => now(),
            'branch_office' => 'Depok',
            'department' => 'IT',
            'position' => 'Web Programmer',
            'password' => Hash::make('12345678'),
        ])->assignRole('user');

        User::create([
            'user_name' => 'mizuhara',
            'full_name' => 'Mizuhara Chizuru',
            'email' => 'chizuru_mizuhara@setiajaya.toyota.id',
            'email_verified_at' => now(),
            'branch_office' => 'Bogor',
            'department' => 'Administrasi',
            'position' => 'Admin',
            'password' => Hash::make('12345678'),
        ])->assignRole('user');
    }
}
