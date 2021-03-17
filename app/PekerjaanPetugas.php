<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PekerjaanPetugas extends Model
{
       public $table = "pekerjaan_petugas";
    
    public $fillable = ['nomor_pk', 'nama_barang', 'jumlah','fotoSebelum','fotoSesudah'];
}
