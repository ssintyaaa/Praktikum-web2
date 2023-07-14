<?php

namespace App\Http\Controllers;

use App\Models\KategoriKursus;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = new Materi();
        return view('admin.bimbel.materi', ['materi' => $materi->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $kategori_kursus = KategoriKursus::all();
       $materi = Materi::all();

       return view('admin.bimbel.create_materi', compact('kategori_kursus','materi'));

    }

    public function etalase()
    {
        $materi = Materi::all();
        return view('frontend.etalase.etalase', compact('materi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat instance baru dengan model produk
        $materi = new Materi();
        // ambil data dari form dengan menggunakan parameter request dari uniq name
        $materi->kode = $request->kode;
        $materi->nama_materi = $request->nama_materi;
        $materi->deskripsi = $request->deskripsi;
        $materi->durasi_jam = $request->durasi_jam;
        $materi->biaya = $request->biaya;
        $materi->kategori_kursus_id = $request->kategori_kursus_id;
        // simpan data yang sudah di ambil ke dalam kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        $materi->save();
        // ketika selesai klik button simpan, kembalikan ke tampilan produk
        return redirect('admin/materi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materi = Materi::find($id);

        $kategori_kursus = KategoriKursus::find($id);

        return view('admin.bimbel.detail_materi', compact('materi','kategori_kursus'));

    }

    public function detail(string $id)
    {
        $materi = Materi::find($id);

        $kategori_kursus = KategoriKursus::find($id);

        return view('frontend.etalase.detail', compact('materi','kategori_kursus'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_kursus = DB::table('kategori_kursus')->get();
        $materi = DB::table('materi_kursus')->where('id', $id)->get();
        return view('admin.bimbel.edit_materi', compact('materi','kategori_kursus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // buat instance baru dengan model produk
        // buat instance baru dengan model produk
        $materi = Materi::find($request->id);;
        // ambil data dari form dengan menggunakan parameter request dari uniq name
        $materi->kode = $request->kode;
        $materi->nama_materi = $request->nama_materi;
        $materi->deskripsi = $request->deskripsi;
        $materi->durasi_jam = $request->durasi_jam;
        $materi->biaya = $request->biaya;
        $materi->kategori_kursus_id = $request->kategori_kursus_id;
        // simpan data yang sudah di ambil ke dalam kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        $materi->save();
        // ketika selesai klik button simpan, kembalikan ke tampilan produk
        return redirect('admin/materi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table produk
        // cari data yang ingin di hapus berdasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('materi_kursus')->where('id', $id)->delete();
        return redirect('admin/materi');
    }
}