<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Pengajar extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'pengajar';

    protected $primary = 'id';

    protected $fillable = [
        'nip',
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
        $alldata = DB::table('pengajar')
        ->select('pengajar.*')
        ->get();
        return $alldata;
    }
}