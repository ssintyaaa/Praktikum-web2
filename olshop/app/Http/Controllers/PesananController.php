<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.produk.pesanan', ['pesanan'=>$pesanan->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesanan = Pesanan::All();
        $produk = Produk::All();

        return view('admin.produk.create_pesanan', compact('pesanan','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat instance baru dengan model produk
        // ambil data dari form menggunakan parameter request dari uniq name
        // simpan data yang sudah diambil ke dalam data kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        // setelah klik simpan, kembalikan ke tampilan produk

        $pesanan = new Pesanan();

        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;

        $pesanan->save();

        return redirect('admin/pesanan');
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
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();

        return view('admin.produk.edit_pesanan', compact('produk', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // buat instance baru dengan model pesanan
        $pesanan = Pesanan::find($request->id);
        // ambil data dari form dengan menggunakan parameter request dari uniq name
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        // simpan data yang sudah di ambil ke dalam kolom pesanan, menggunakan instance pesanan
        // simpan data menggunakan method save()
        $pesanan->save();
        // ketika selesai klik button simpan, kembalikan ke tampilan pesanan
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yang ingin dihapus bedasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan');
    }
}
