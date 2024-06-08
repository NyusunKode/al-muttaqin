<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = "registrasis";
    protected $primaryKey = "id";

    protected $enumStatus = [
        'terdaftar',
        'diterima',
        'ditolak'
    ];

    protected $fillable = [
        "nama_ortu",
        "nama_anak",
        "nomor_wa",
        "status"
    ];

    public static function getStatusOptions()
    {
        return [
            'terdaftar',
            'diterima',
            'ditolak'
        ];
    }
}
