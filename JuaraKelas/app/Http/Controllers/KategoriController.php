<?php

namespace App\Http\Controllers;

use App\Models\KategoriKursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = new KategoriKursus();
        return view('admin.bimbel.kategori', ['kategori'=>$kategori->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_kursus = KategoriKursus::all();

        return view('admin.bimbel.create_kategori');
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

        $kategori = new KategoriKursus();

        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();

        return redirect('admin/kategori');
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
        $kategori_kursus = DB::table('kategori_kursus')->where('id', $id)->get();

        return view('admin.bimbel.edit_kategori', compact('kategori_kursus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // buat instance baru dengan model produk
        // ambil data dari form menggunakan parameter request dari uniq name
        // simpan data yang sudah diambil ke dalam data kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        // setelah klik simpan, kembalikan ke tampilan produk

        $kategori = KategoriKursus::find($request->id);;

        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();

        return redirect('admin/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yang ingin dihapus bedasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('kategori_kursus')->where('id', $id)->delete();
        return redirect('admin/kategori');
    }
}