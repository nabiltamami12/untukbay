<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
     protected $fillable = [
        'nama_material','kelompok_material','stok', 'seksen',
    ];
   
    public function laporan_cek(){
  return $this->belongsTo(KebutuhanMaterial::class,'id','id');
        // return $this->belongsTo('App\Material','id_material','id');
    }
     public function trafo_cek()
{
return $this->belongsTo('App\Trafo','id_trafo','id');
    }
      public function peminjaman()
{
return $this->belongsTo('App\PeminjamanMaterial');
    }

}
