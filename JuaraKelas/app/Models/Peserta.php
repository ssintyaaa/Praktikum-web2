<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Peserta extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'peserta';

    protected $primary = 'id';

    protected $fillable = [
        'nama',
        'gender',
        'hp',
        'email',
        'alamat'
    ];

    public function penjadwalan(){
        return $this->hasMany(Penjadwalan::class);
    }

    public function getAllData(){
        $alldata = DB::table('peserta')
        ->select('peserta.*')
        ->get();
        return $alldata;
    }
}