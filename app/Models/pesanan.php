<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesanan extends Model
{
    use HasFactory;

    // panggil tabel pesanan
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $fillable = [
        // 'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];

    // relasi one To many ke table produk
    public function produk(){
        return $this->belongsTo(produk::class);
    }

    public function getAllData(){
        return DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->select('pesanan.*', 'produk.nama as nama_produk')
        ->get();
    }
}
