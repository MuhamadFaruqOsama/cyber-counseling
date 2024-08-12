<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama',
        'alamat',
        'pekerjaan',
        'telp',
        'status',
        'tanggal_lahir',
        'tempat_lahir',
    ];

    protected $guarded = ['id'];
}
