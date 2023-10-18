<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branchId = Branch::inRandomOrder()->first()->id;

        User::create([
            'username' => 'kyriten',
            'fullname' => 'Abimanyu Okysaputra Rachman',
            'email' => 'abimanyu@setiajaya.toyota.id',
            'email_verified_at' => now(),
            'phone' => '081294797215',
            'gender' => 'male',
            'branch_id' => $branchId,
            'department' => 'IT',
            'position' => 'Web Programmer',
            'password' => Hash::make('12345678'),
        ])->assignRole('user');

        User::create([
            'username' => 'mizuhara',
            'fullname' => 'Mizuhara Chizuru',
            'email' => 'chizuru_mizuhara@setiajaya.toyota.id',
            'email_verified_at' => now(),
            'phone' => '082287689980',
            'gender' => 'female',
            'branch_id' => $branchId,
            'department' => 'Administration',
            'position' => 'Admin',
            'password' => Hash::make('12345678'),
        ])->assignRole('user');

        User::factory()->count(30)->create();
    }
}
