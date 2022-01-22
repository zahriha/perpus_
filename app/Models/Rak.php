<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Rak extends Model
{
    use HasFactory;

    protected $table ='rak';
    protected $fillable = [
        'nama',
        'letak',
        'judul_buku'
    ];
    protected $hidden;

public function buku(){
    return $this->belongsTo(Buku::class);
}


}
