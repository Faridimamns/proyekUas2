<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kategoriProduk extends Model
{
    use HasFactory;

    protected $table = 'kategori_produk';
    public $timestamps = false;
    protected $fillable = ['nama'];


    public function produk(){
        return $this->hasMany(produk::class);
    }
    public function getAllData(){
        return DB::table('kategori_produk')
        ->get();
    }
}
