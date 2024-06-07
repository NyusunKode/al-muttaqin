<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = "registrasis";

    protected $primaryKey = "id";

    protected $fillable = [
        "nama_ortu",
        "nama_anak",
        "nomor_wa",
    ];
}
