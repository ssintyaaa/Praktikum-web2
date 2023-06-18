<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Pesanan extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'pesanan';

    protected $primary = 'id';

    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];

    public function kategori_produk(){
        return $this->belongsTo(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('pesanan')
        ->join('produk','pesanan.produk_id','=','produk.id')
        ->select('pesanan.*','produk.nama as nama_produk')
        ->get();
        return $alldata;
    }
}