<?php

namespace App\Http\Controllers;

use App\Models\kategoriProduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //query builder
        $kategori_produk = DB::table('kategori_produk')
        ->get();
        return view ('admin.kategori_produk.index',compact('kategori_produk'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori_produk = kategoriProduk::all();
        return view('admin.kategori_produk.create', compact('kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $kategori_produk = new kategoriProduk;
        $kategori_produk -> nama = $request -> nama;

        $kategori_produk->save();

        return redirect('kategori_produk');
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
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.kategori_produk.edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $kategori_produk = KategoriProduk::find($request->id);
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('kategori_produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
    DB::table('kategori_produk')->where('id', $id)->delete();
    return redirect('kategori_produk');
    }
}
