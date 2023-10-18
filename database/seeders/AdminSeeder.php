<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
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
        $branchId = Branch::inRandomOrder()->first()->id;

        User::create([
            'username' => 'admin',
            'fullname' => 'Abimanyu Okysaputra Rachman',
            'email' => 'admin_it@setiajaya.toyota.id',
            'email_verified_at' => now(),
            'phone' => '089587999912',
            'gender' => 'male',
            'branch_id' => $branchId,
            'department' => 'IT',
            'position' => 'Admin',
            'password' => Hash::make('12345678'),
        ])->assignRole('admin');
    }
}
