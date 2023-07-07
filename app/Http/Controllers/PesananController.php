<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use App\Models\produk;
use App\Models\kategoriProduk;

use Illuminate\Support\Facades\DB; // query builder

// eloquent
use Illuminate\Http\Request;

class PesananController extends Controller
{

    public function index()
    {
        //
        $pesanan = DB::table('pesanan')
        ->join ('produk', 'pesanan.produk_id', '=',
        'produk.id')
        ->select('pesanan.*', 'produk.nama as nama_produk')
        ->get();

        return view('admin.pesanan.index', compact('pesanan'));
    }

    public function create()
    {
        $kategori_produk = kategoriProduk::all();
        $produk = produk::all();
        $pesanan = pesanan::all();
        return view ('admin.pesanan.create', compact('kategori_produk', 'produk', 'pesanan'));
    }

    public function store(Request $request)
    {
        $pesanan = new pesanan;
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();

        return redirect('pesanan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();

        return view ('admin.pesanan.edit', compact ('pesanan', 'produk'));
    }

    public function update(Request $request)
    {
        //
        $pesanan = pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();

        return redirect('pesanan');
    }

    public function destroy(string $id)
    {
        //
        DB::table('pesanan')->where('id', $id)->delete();

        return redirect('pesanan');
    }
}
