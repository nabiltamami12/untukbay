<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPekerjaanPetugas extends Model
{
 public $fillable = ['nomor_pk', 'nama_barang', 'jumlah','fotoSebelum','fotoSesudah'];
  
}
