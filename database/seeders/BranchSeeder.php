<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
            [
                'name' => 'Bogor'
            ],
            [
                'name' => 'Depok'
            ],
            [
                'name' => 'Cibubur'
            ],
            [
                'name' => 'Cimanggis'
            ],
            [
                'name' => 'Parung',
            ],
            [
                'name' => 'Pamulang'
            ]
        ]);
    }
}
