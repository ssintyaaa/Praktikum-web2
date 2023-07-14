<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriKursus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'kategori_kursus';

    protected $primary = 'id';

    protected $fillable = [
        'nama_kategori'
    ];

    public function materi(){
        return $this->hasMany(Materi::class);
    }

    public function getAllData(){
        $alldata = DB::table('kategori_kursus')
        ->select('kategori_kursus.*')
        ->get();
        return $alldata;
    }
}