<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'isbn';
    protected $fillable = ['isbn','judul','genre','jumlah_halaman','tahun_terbit','stok'];
}
