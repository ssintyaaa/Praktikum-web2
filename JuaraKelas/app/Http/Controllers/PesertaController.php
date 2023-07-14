<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = new Peserta();
        return view('admin.bimbel.peserta', ['peserta'=>$peserta->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peserta = Peserta::All();
        $materi = Materi::All();

        return view('admin.bimbel.create_peserta', compact('peserta','materi'));
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

        $peserta = new Peserta();

        $peserta->nama = $request->nama;
        $peserta->gender = $request->gender;
        $peserta->hp = $request->hp;
        $peserta->email = $request->email;
        $peserta->alamat = $request->alamat;
        $peserta->save();

        return redirect('admin/peserta');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peserta = Peserta::find($id);

        return view('admin.bimbel.detail_peserta', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peserta = DB::table('peserta')->where('id', $id)->get();

        return view('admin.bimbel.edit_peserta', compact('peserta'));
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

        $peserta = peserta::find($request->id);

        $peserta->nama = $request->nama;
        $peserta->gender = $request->gender;
        $peserta->hp = $request->hp;
        $peserta->email = $request->email;
        $peserta->alamat = $request->alamat;

        $peserta->save();

        return redirect('admin/peserta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yang ingin dihapus bedasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('peserta')->where('id', $id)->delete();
        return redirect('admin/peserta');
    }
}