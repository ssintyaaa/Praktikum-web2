<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use App\Models\Pengajar;
use App\Models\Peserta;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjadwalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjadwalan = new Penjadwalan();
        return view('admin.bimbel.penjadwalan', ['penjadwalan'=>$penjadwalan->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjadwalan = Penjadwalan::all();
        $materi = Materi::all();
        $pengajar = Pengajar::all();
        $peserta = Peserta::all();

        return view('admin.bimbel.create_jadwal', compact('penjadwalan','materi','pengajar','peserta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penjadwalan = new Penjadwalan();

        $penjadwalan->kode_kelas = $request->kode_kelas;
        $penjadwalan->kelas = $request->kelas;
        $penjadwalan->hari = $request->hari;
        $penjadwalan->tgl_mulai = $request->tgl_mulai;
        $penjadwalan->tgl_akhir = $request->tgl_akhir;
        $penjadwalan->jam_mulai = $request->jam_mulai;
        $penjadwalan->jam_akhir = $request->jam_akhir;
        $penjadwalan->materi_kursus_id = $request->materi_kursus_id;
        $penjadwalan->pengajar_id = $request->pengajar_id;
        $penjadwalan->peserta_id = $request->peserta_id;

        $penjadwalan->save();

        return redirect('admin/penjadwalan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjadwalan = Penjadwalan::find($id);
        return view('admin.bimbel.detail_jadwal', ['penjadwalan'=>$penjadwalan->getAllData()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $materi = DB::table('materi_kursus')->get();
        $pengajar = DB::table('pengajar')->get();
        $peserta = DB::table('peserta')->get();
        $penjadwalan = DB::table('penjadwalan_kelas')->where('id', $id)->get();

        return view('admin.bimbel.edit_jadwal', compact('penjadwalan','materi','pengajar','peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $penjadwalan = Penjadwalan::find($request->id);

        $penjadwalan->kode_kelas = $request->kode_kelas;
        $penjadwalan->kelas = $request->kelas;
        $penjadwalan->hari = $request->hari;
        $penjadwalan->tgl_mulai = $request->tgl_mulai;
        $penjadwalan->tgl_akhir = $request->tgl_akhir;
        $penjadwalan->jam_mulai = $request->jam_mulai;
        $penjadwalan->jam_akhir = $request->jam_akhir;
        $penjadwalan->materi_kursus_id = $request->materi_kursus_id;
        $penjadwalan->pengajar_id = $request->pengajar_id;
        $penjadwalan->peserta_id = $request->peserta_id;

        $penjadwalan->save();

        return redirect('admin/penjadwalan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yang ingin dihapus bedasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('penjadwalan_kelas')->where('id', $id)->delete();
        return redirect('admin/penjadwalan');
    }
}