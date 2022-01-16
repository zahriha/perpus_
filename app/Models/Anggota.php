<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table='table_anggota';
    protected $fillable=[
        'kode_anggota',
        'nama',
        'jekel',
        'jurusan',
        'hp',
        'alamat'

    ];
    protected $hidden;
}
