<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemadaman;
use App\Material;
use App\KebutuhanMaterial;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Trafo;
use PDF;
use Illuminate\Support\Facades\Input;
use App\PeminjamanMaterial;
use App\User;
use App\LaporanPekerjaanPetugas;
use App\LaporanPemadaman;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan_pemadaman()
    {
     $BP = Pemadaman::with('trafo_cek')->count();
     $padam = LaporanPemadaman::join('trafos','trafos.id','=','laporan_pemadamen.id_trafo')
     ->select('laporan_pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
     ->orderBy('jadwal_padam');
     $pemadaman_admin = $padam->get();
     return view('admin_pln.laporan.laporan_pemadaman',compact('pemadaman_admin'))->with('BP', $BP);
   }
   
   public function laporan_pekerjaan()
   {
    $user = User::where('role','!=','admin')->get();
    $ori_mat = Material::all();
    $lap = DB::table('laporan_pekerjaan_petugas')
    ->join('pemadamen','pemadamen.nomor_pk','=','laporan_pekerjaan_petugas.nomor_pk')
    ->join('trafos','trafos.id','=','pemadamen.id_trafo')
    ->select('laporan_pekerjaan_petugas.*','pemadamen.jadwal_padam as jadwal_padam','pemadamen.tim as tim','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','pemadamen.nama_petugas as nama_petugas')
    ->orderBy('pemadamen.jadwal_padam')
    ->get();
    // ;

// $lap =  LaporanPekerjaanPetugas::all();
    return view('admin_pln.laporan.laporan_pekerjaan', compact('lap', 'ori_mat','user'));
  }

  public function laporan_peminjaman_material()
  {

    $nama_material = Material::all();
    $peminjaman_material =  DB::table('peminjaman_materials')->join('materials','materials.id','=','peminjaman_materials.id_material')
    ->select('peminjaman_materials.*','materials.nama_material as nama_material')
    ->orderBy('tanggal')
    ->get()
    ;   
    $tim_peminjaman_material =  DB::table('peminjaman_materials')->join('materials','materials.id','=','peminjaman_materials.id_material')
    ->select('peminjaman_materials.*','materials.nama_material as nama_material')
    ->orderBy('tim')
    ->groupBy('tim')
    ->get();
    return view('admin_pln.laporan.laporan_peminjaman_material', compact('tim_peminjaman_material','peminjaman_material','nama_material'));
  }


  public function cetak_laporan_pekerjaan(request $request)
  {
  $tanggal_mulai = $request->tanggal_mulai;
   $tanggal_akhir = $request->tanggal_akhir;
   // $tim_cetak =  $request->filterTim;
   $filter =  $request->filter;
   $petugas =  $request->petugas;
   $nomor_pk =  $request->nomor_pk;
   $nama_barang =  $request->nama_barang;

   $ori_mat = Material::all();
   $lap = DB::table('laporan_pekerjaan_petugas')
   ->join('pemadamen','pemadamen.nomor_pk','=','laporan_pekerjaan_petugas.nomor_pk')
   ->join('trafos','trafos.id','=','pemadamen.id_trafo')
   ->select('laporan_pekerjaan_petugas.*','laporan_pekerjaan_petugas.nomor_pk as nomor_pk','pemadamen.jadwal_padam as jadwal_padam','pemadamen.tim as tim','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','pemadamen.nama_petugas as nama_petugas');
      // ->get();
   // $user = User::where('role','!=','admin')->get();


   
   if ($filter ==1 ) {
     $lap = $lap->where('pemadamen.nama_petugas','=',$petugas);
     $filter = 1;
   }

   else if ($filter ==2 ) {
     $lap = $lap->where('laporan_pekerjaan_petugas.nomor_pk','=',$nomor_pk);
     $filter ==2;
   }

   else if ($filter ==3 ) {
     $lap = $lap->where('laporan_pekerjaan_petugas.nama_barang','=',$nama_barang);
     $filter ==3;
   }
   else if ($filter ==4 ) {
     if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
       $lap = $lap->whereDate('jadwal_padam','>=',$request->tanggal_mulai);     
       $lap = $lap->whereDate('jadwal_padam','<=',$request->tanggal_akhir);
       $filter ==4;
     }
     else{
      return redirect()->back()->with('alert', 'Data Tidak Ada');

    }
  }
  $lap = $lap->orderBy('jadwal_padam')->get();

  $pdf = PDF::loadView('admin_pln.laporan.download.cetak_laporan_material', compact('lap'))->setPaper('a4', 'landscape');
  // dd($lap);
  return $pdf->download('laporan_pekerjaan_petugas.pdf');
}
public function cetak_laporan_peminjaman_material(request $request)
{

 $dari = $request->tanggal_his_mulai;
 $hingga = $request->tanggal_his_akhir;
 $tim = $request->tim_his;
// dd($request->tanggal_his_mulai);
 $nama_material = Material::all();
 $peminjaman_material = DB::table('peminjaman_materials')->join('materials','materials.id','=','peminjaman_materials.id_material')
 ->select('peminjaman_materials.*','materials.nama_material as nama_material');

 if($request->tanggal_his_mulai !=''){
  $peminjaman_material = $peminjaman_material->whereDate('tanggal','>=',$request->tanggal_his_mulai)->where('tim', $request->tim_his);        
}
if($request->tanggal_his_akhir !=''){
  $peminjaman_material = $peminjaman_material->whereDate('tanggal','<=',$request->tanggal_his_akhir)->where('tim', $request->tim_his);        
}

$data = $peminjaman_material->orderBy('tanggal')->get();

$pdf = PDF::loadView('admin_pln.laporan.download.cetak_laporan_peminjaman_material', compact('data','nama_material','dari','hingga','tim'))->setPaper('a4', 'landscape');
return $pdf->stream('laporan_peminjaman_material.pdf');
}




public function cetak_laporan_pemadaman(request $request)
{
 $filter =  $request->filter;
 $petugas =  $request->petugas;
 $nomor_pk =  $request->nomor_pk;
 $kode_trafo =  $request->kode_trafo;
 $alamat =  $request->alamat;
 $tanggal_mulai = $request->tanggal_mulai;
 $tanggal_akhir = $request->tanggal_akhir;

 $padam = LaporanPemadaman::join('trafos','trafos.id','=','laporan_pemadamen.id_trafo')
 ->select('laporan_pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
 ->orderBy('jadwal_padam');

 if ($filter ==1 ) {
   $padam = $padam->where('laporan_pemadamen.nama_petugas','=',$petugas);

 }

 else if ($filter ==2 ) {
   $padam = $padam->where('laporan_pemadamen.nomor_pk','=',$nomor_pk);

 }

 else if ($filter ==3 ) {
   $padam = $padam->where('trafos.alamat','=',$alamat);

 }
 else if ($filter ==4 ) {
   if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
     $padam = $padam->whereDate('jadwal_padam','>=',$request->tanggal_mulai);     
     $padam = $padam->whereDate('jadwal_padam','<=',$request->tanggal_akhir);
   }
   else{
    return redirect()->back()->with('alert', 'Data Tidak Ada');

  }
}
else if ($filter ==5 ) {
 $padam = $padam->where('trafos.kode_trafo','=',$kode_trafo);

}

$BP = Pemadaman::with('trafo_cek')->count();
$data = $padam->orderBy('jadwal_padam')->get();

$pdf = PDF::loadView('admin_pln.laporan.download.cetak_laporan_pemadaman', compact('data','dari','hingga'))->setPaper('a3', 'landscape');
return $pdf->stream('laporan_pemadama.pdf');

}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function filter_peminjaman_material(Request $request)
    {
      $nama_material = Material::all();

      $tanggal_cetak_mulai = $request->tanggal_mulai;
      $tanggal_cetak_akhir = $request->tanggal_akhir;
      $tim_cetak =  $request->filterTim;

   // echo $tanggal_cetak_mulai;
   // echo "<br>";
   // echo $tanggal_cetak_akhir;
   // echo "<br>";
   // echo $tim_cetak;
      $peminjaman_material = PeminjamanMaterial::join('materials','materials.id','=','peminjaman_materials.id_material')
      ->select('peminjaman_materials.*', 'materials.nama_material as nama_material');

      if($request->tanggal_mulai != ''){
        $peminjaman_material = $peminjaman_material->whereDate('tanggal','>=',$request->tanggal_mulai);        
      }
      if($request->tanggal_akhir != ''){
        $peminjaman_material = $peminjaman_material->whereDate('tanggal','<=',$request->tanggal_akhir);        
      }

      $peminjaman_material = $peminjaman_material->where('tim', $request->filterTim)->orderBy('tanggal')->get();  
      $user = User::where('role','!=','admin')->get();
      return view('admin_pln.laporan.histori.filter_laporan_peminjaman_material', compact('peminjaman_material','nama_material','tanggal_cetak_mulai','tanggal_cetak_akhir','tim_cetak','user'));


    }


    public function filter_pemadaman(Request $request)
    {
      $filter =  $request->filter;
      $petugas =  $request->petugas;
      $nomor_pk =  $request->nomor_pk;
      $kode_trafo =  $request->kode_trafo;
      $alamat =  $request->alamat;
      $tanggal_mulai = $request->tanggal_mulai;
      $tanggal_akhir = $request->tanggal_akhir;

      $padam = LaporanPemadaman::join('trafos','trafos.id','=','laporan_pemadamen.id_trafo')
      ->select('laporan_pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
      ->orderBy('jadwal_padam');

      if ($filter ==1 ) {
       $padam = $padam->where('laporan_pemadamen.nama_petugas','=',$petugas);

     }

     else if ($filter ==2 ) {
       $padam = $padam->where('laporan_pemadamen.nomor_pk','=',$nomor_pk);

     }

     else if ($filter ==3 ) {
       $padam = $padam->where('trafos.alamat','=',$alamat);

     }
     else if ($filter ==4 ) {
       if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
         $padam = $padam->whereDate('jadwal_padam','>=',$request->tanggal_mulai);     
         $padam = $padam->whereDate('jadwal_padam','<=',$request->tanggal_akhir);
       }
       else{
        return redirect()->back()->with('alert', 'Data Tidak Ada');

      }
    }
    else if ($filter ==5 ) {
     $padam = $padam->where('trafos.kode_trafo','=',$kode_trafo);

   }

   $BP = Pemadaman::with('trafo_cek')->count();
   $pemadaman_admin = $padam->orderBy('jadwal_padam')->get();
   return view('admin_pln.laporan.histori.filter_pemadaman',compact('pemadaman_admin'))->with('BP', $BP);
   

 }
 public function filter_pekerjaan(Request $request)
 {
   $tanggal_mulai = $request->tanggal_mulai;
   $tanggal_akhir = $request->tanggal_akhir;
   // $tim_cetak =  $request->filterTim;
   $filter =  $request->filter;
   $petugas =  $request->petugas;
   $nomor_pk =  $request->nomor_pk;
   $nama_barang =  $request->nama_barang;

   $ori_mat = Material::all();
   $lap = DB::table('laporan_pekerjaan_petugas')
   ->join('pemadamen','pemadamen.nomor_pk','=','laporan_pekerjaan_petugas.nomor_pk')
   ->join('trafos','trafos.id','=','pemadamen.id_trafo')
   ->select('laporan_pekerjaan_petugas.*','laporan_pekerjaan_petugas.nomor_pk as nomor_pk','pemadamen.jadwal_padam as jadwal_padam','pemadamen.tim as tim','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','pemadamen.nama_petugas as nama_petugas');
      // ->get();
   // $user = User::where('role','!=','admin')->get();


   
   if ($filter ==1 ) {
     $lap = $lap->where('pemadamen.nama_petugas','=',$petugas);
     $filter = 1;
   }

   else if ($filter ==2 ) {
     $lap = $lap->where('laporan_pekerjaan_petugas.nomor_pk','=',$nomor_pk);
     $filter ==2;
   }

   else if ($filter ==3 ) {
     $lap = $lap->where('laporan_pekerjaan_petugas.nama_barang','=',$nama_barang);
     $filter ==3;
   }
   else if ($filter ==4 ) {
     if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
       $lap = $lap->whereDate('jadwal_padam','>=',$request->tanggal_mulai);     
       $lap = $lap->whereDate('jadwal_padam','<=',$request->tanggal_akhir);
       $filter ==4;
     }
     else{
      return redirect()->back()->with('alert', 'Data Tidak Ada');

    }
  }
  $lap = $lap->get();

// dd($lap);
  return view('admin_pln.laporan.histori.filter_pekerjaan', compact('lap', 'ori_mat','filter','petugas','nomor_pk','nama_barang','tanggal_mulai','tanggal_akhir'));

//   $date_e = array(

// 'from' => $request->from,
// 'to' => $request->to,
//   );

//   dd($date_e);


}

}
