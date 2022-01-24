<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    


    protected $table ='peminjaman';
    protected $fillable = [
        'tgl_pinjam',
        'tgl_kembali',
        'id_buku',
        'id_anggota',
        'id_petugas'
    ];
    protected $hidden;

    public function buku(){
        return $this->belongsTo(Buku::class);
    }

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }

  
    
    
}
