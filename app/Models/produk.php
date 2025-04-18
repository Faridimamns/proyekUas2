<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    public $timestamps = false ;
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'herga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id'
    ];

    public function kategoriProduk(){
        return $this->belongsTo(kategoriProduk::class);
    }


    public function getAllData(){
        return DB::table('produk')
        ->join ('kategori_produk', 'produk.kategori_produk_id' ,'=', 'kategori_produk.id')
        ->select('produk.*','kategori_produk.nama as nama' )
        ->get();
    }

}




