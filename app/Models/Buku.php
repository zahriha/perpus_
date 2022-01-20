<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table='buku';
    protected $fillable=[
        'kode_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun',
        'stok'

    ];
    protected $hidden;

    public function Rak(){
        return $this->hasMany(Rak::class);
    }

    public function Peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
 
}
