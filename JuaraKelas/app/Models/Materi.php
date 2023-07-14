<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi_kursus';
    // protected untuk melindungi

    public $timestamps = false;

    protected $primarykey = 'id'; // primary key auto_increment

    protected $fillable = [
        'kode',
        'nama_materi',
        'deskripsi',
        'durasi_jam',
        'biaya',
        'kategori_kursus_id'
    ];
    public function kategori_kursus(){
        return $this->belongsTo(KategoriKursus::class);
    }

    public function penjadwalan(){
        return $this->hasMany(Penjadwalan::class);
    }

    public function getAllData(){
        $alldata = DB::table('materi_kursus')
        ->join('kategori_kursus','materi_kursus.kategori_kursus_id','=','kategori_kursus.id')
        ->select('materi_kursus.*','kategori_kursus.nama_kategori')
        ->get();
        return $alldata;
    }
}