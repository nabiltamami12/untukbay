<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemadaman extends Model
{
    protected $fillable = [
        "jadwal_padam",
        "nomor_pk", 
        	"awal_padam" 	,"akhir_padam" , "deskripsi_pekerjaan", "unit_kerja" , 'penyulang'
        	, 'nama_petugas'
        	 ,'tim', 'id_trafo' , "latitude", "longitude", 'status',
    ];
    public function trafo_cek()
{
return $this->belongsTo('App\Trafo','id_trafo','id');
    }
}
