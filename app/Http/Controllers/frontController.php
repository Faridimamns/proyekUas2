<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ini index landing pages!!
        $produk = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        $produk = produk::take(8)->get();
        return view('admin.front.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //pesanan client
        $produk = produk::all();
        $pesanan = pesanan::all();
        return view('admin.front.form', compact( 'produk', 'pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store pesanan client
        $pesanan = new pesanan;
        // $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();

        return redirect('');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
