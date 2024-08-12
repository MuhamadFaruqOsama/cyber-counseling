<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'id_user',
        'nama',
        'jenis_kelamin',
        'nim',
        'telp',
        'jurusan',
        'fakultas',
        'semester',
        'tempat_lahir',
        'tanggal_lahir',
        'bukti_identitas',
    ];

    protected $guarded = ['id'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
