<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name'       => 'PT. Indofood Sukses Makmur',
                'phone'      => '0215795777',
                'address'    => 'Sudirman Plaza, Jl. Jend. Sudirman Kav. 76-78, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'PT. Unilever Indonesia',
                'phone'      => '0218976555',
                'address'    => 'Grha Unilever, Jl. Jend. Gatot Subroto Kav. 15, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'PT. Mayora Indah',
                'phone'      => '0215698777',
                'address'    => 'Gedung Mayora, Jl. Tomang Raya No. 21-23, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
