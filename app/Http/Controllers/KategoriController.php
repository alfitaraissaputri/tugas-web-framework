<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Menyisipkan data baru ke tabel m_kategori.
     * (Route: /kategori)
     */
    public function index ()
    {
       /* $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        
        // Memastikan data dimasukkan ke database
        DB::table('m_kategori')->insert($data);*/
        
        return 'Insert data berhasil!';
    }
}