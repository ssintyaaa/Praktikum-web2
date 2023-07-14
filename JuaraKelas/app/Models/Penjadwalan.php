<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penjadwalan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'penjadwalan_kelas';

    protected $primary = 'id';

    protected $fillable = [
        'kode_kelas',
        'kelas',
        'hari',
        'tgl_mulai',
        'tgl_akhir',
        'jam_mulai',
        'jam_akhir',
        'materi_kursus_id',
        'pengajar_id',
        'peserta_id'
    ];

    public function materi(){
        return $this->belongsTo(Materi::class);
    }

    public function pengajar(){
        return $this->belongsTo(Pengajar::class);
    }

    public function peserta(){
        return $this->belongsTo(Peserta::class);
    }

    public function getAllData(){
        $alldata = DB::table('penjadwalan_kelas')
        ->join('materi_kursus','penjadwalan_kelas.materi_kursus_id','=','materi_kursus.id')
        ->join('pengajar','penjadwalan_kelas.pengajar_id','=','pengajar.id')
        ->join('peserta','penjadwalan_kelas.peserta_id','=','peserta.id')
        ->select('penjadwalan_kelas.*','materi_kursus.nama_materi as nama_mtr','pengajar.nama as nama_pengajar','peserta.nama as nama_peserta')
        ->get();
        return $alldata;
    }
}