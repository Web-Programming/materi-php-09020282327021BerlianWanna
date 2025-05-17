<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodis'; // pastikan nama tabel sesuai
    protected $fillable = ['nama', 'kode_prodi']; // sesuaikan kolomnya
}
