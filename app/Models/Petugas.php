<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Petugas extends Model
{
    use HasFactory;

    protected $table ='petugas';
    protected $fillable = [
        'nama',
        'jabatan',
        'hp',
        'alamat'
    ];
    protected $hidden;
}
