<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPeminjaman extends Model
{
   protected $fillable = [
      'id_material' ,'tanggal','status', 'jumlah', 'tim',
    ];//


       public function material_cek()
{
return $this->belongsTo('App\Material','id_material','id');
    }
}
