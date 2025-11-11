<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1, 
                'supplier_kode' => 'SUP01',  
                'supplier_nama' => 'CV Putri Jaya',
                'supplier_alamat' => 'Jln. Karya Timur',
            ],
            [
                'supplier_id' => 2, 
                'supplier_kode' => 'SUP02',  
                'supplier_nama' => 'UD Pak Unyil',
                'supplier_alamat' => 'Jln. Bunga',
            ],
            [
                'supplier_id' => 3, 
                'supplier_kode' => 'SUP03',  
                'supplier_nama' => 'PT Karya Bangsa',
                'supplier_alamat' => 'Jln. Cengkeh',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
