<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produk = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori_produk = kategoriProduk::all();
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $produk = new produk;
        $produk -> kode = $request -> kode;
        $produk -> nama = $request -> nama;
        $produk -> harga_jual = $request -> harga_jual;
        $produk -> harga_beli = $request -> harga_beli;
        $produk -> stok = $request -> stok;
        $produk -> min_stok = $request -> min_stok;
        $produk -> deskripsi = $request -> deskripsi;
        $produk -> kategori_produk_id = $request->kategori_produk_id;
        $produk -> save();
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('produk', 'kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request)
    {
        //
        // dd($request -> kode);
        $produk = produk::find($request->id);
        $produk -> kode = $request -> kode;
        $produk -> nama = $request -> nama;
        $produk -> harga_jual = $request -> harga_jual;
        $produk -> harga_beli = $request -> harga_beli;
        $produk -> stok = $request -> stok;
        $produk -> min_stok = $request -> min_stok;
        $produk -> deskripsi = $request -> deskripsi;
        $produk -> kategori_produk_id = $request -> kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('produk')->where('id', $id)->delete();
        return redirect('produk');
    }
}
