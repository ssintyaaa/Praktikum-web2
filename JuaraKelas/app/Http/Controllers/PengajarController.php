<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajar = new Pengajar();
        return view('admin.bimbel.pengajar', ['pengajar'=>$pengajar->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengajar = Pengajar::all();
        $materi = Materi::all();

        return view('admin.bimbel.create_pengajar', compact('pengajar','materi'));
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

        $pengajar = new Pengajar();

        $pengajar->nip = $request->nip;
        $pengajar->nama = $request->nama;
        $pengajar->gender = $request->gender;
        $pengajar->hp = $request->hp;
        $pengajar->email = $request->email;
        $pengajar->alamat = $request->alamat;
        $pengajar->save();

        return redirect('admin/pengajar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajar = Pengajar::find($id);

        return view('admin.bimbel.detail_pengajar', compact('pengajar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengajar = DB::table('pengajar')->where('id', $id)->get();

        return view('admin.bimbel.edit_pengajar', compact('pengajar'));
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

        $pengajar = Pengajar::find($request->id);
        $pengajar->nip = $request->nip;
        $pengajar->nama = $request->nama;
        $pengajar->gender = $request->gender;
        $pengajar->hp = $request->hp;
        $pengajar->email = $request->email;
        $pengajar->alamat = $request->alamat;

        $pengajar->save();

        return redirect('admin/pengajar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yang ingin dihapus bedasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('pengajar')->where('id', $id)->delete();
        return redirect('admin/pengajar');
    }
}