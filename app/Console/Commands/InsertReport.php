<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class InsertReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'membuat laporan otomatis';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // $hariIni = date('y-m-d');
        $data = DB::table('peminjaman_materials')
        ->join('materials', 'materials.id','=','peminjaman_materials.id_material')
        ->select('peminjaman_materials.*','materials.nama_material as nama_material','materials.kelompok_material as kelompok_material')
        // ->whereDate('tanggal',now())
        ->get();
foreach ($data as  $value) {
    
         $input  = array(
        'id_material' => $value->id_material,
        'tanggal' => $value->tanggal,
        'tim' => $value->tim,
        'status' => $value->status,
        'jumlah' => $value->jumlah,
        'created_at' => $value->created_at,
        'updated_at' => $value->updated_at,
        );
        DB::table('laporan_peminjamen')->insert($input);
        // echo "Kenek Lurd, Hehe :)";
    }



      $data_padam = DB::table('pemadamen')
          ->join('trafos','trafos.id','pemadamen.id_trafo')
          ->select('pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','trafos.latitude as lat','trafos.longitude as lang')
          ->orderBy('jadwal_padam','asc')            
          ->get();
foreach ($data_padam as  $value) {


   $i_kom =  array(
            "jadwal_padam" => $value->jadwal_padam,
            'awal_padam'=> $value->awal_padam,
            'akhir_padam'=> $value->akhir_padam,
            'id_trafo'=> $value->id_trafo,
            'deskripsi_pekerjaan'=> $value->deskripsi_pekerjaan,
            'unit_kerja'=> 'pln ulp jajag',
            'penyulang'=> $value->penyulang,
            'tim'=> $value->tim,
            'latitude'=> $value->lat,
            'longitude'=> $value->lang,
            'status' => 'Belum Dikerjakan',
             'created_at' => $value->created_at,
        'updated_at' => $value->updated_at,
        );

 DB::table('laporan_pemadamen')->insert($i_kom);
        // echo "Kenek Lurd, Hehe :)";
}


        $kebutuhan_material = DB::table('kebutuhan_materials')
        ->join('trafos','trafos.id','=','kebutuhan_materials.id_trafo')
        ->join('materials','materials.id','=','kebutuhan_materials.id_material')
        ->select('kebutuhan_materials.*','materials.nama_material as nama_material','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
        ->get();
foreach ($kebutuhan_material as  $value) {
   

  $simpan = array(
        'tanggal' => $value->tanggal,
        'id_peminjaman' => $value->id_peminjaman,
        'id_material'=> $value->id_material,
        'keterangan' => $value->keterangan,
        'tim' => $value->tim,
        'status'=> $value->status,
        'jumlah'=> $value->jumlah,
        'foto' => $value->foto,
        'id_trafo' => $value->id_trafo,
         'created_at' => $value->created_at,
        'updated_at' => $value->updated_at,

    );
 DB::table('laporan_materials')->insert($simpan);
}

}

}
