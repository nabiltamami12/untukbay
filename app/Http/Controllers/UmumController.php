<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemadaman;
use App\LaporanPemadaman;
use DB;
use App\KebutuhanMaterial;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $padam = Pemadaman::join('trafos','trafos.id','=','pemadamen.id_trafo')
     ->select('pemadamen.*','trafos.latitude as latitude','trafos.longitude as longitude','trafos.alamat as alamat');
     $padamTamu = $padam->get();
   $SD = Pemadaman::select('status')->where('status','=','Sedang Dikerjakan')->count();
   $BD = Pemadaman::select('status')->where('status','=','Belum Dikerjakan')->count();

        return view('umum.welcome', compact('padamTamu','SD','BD'));    }


        public function dashboard()
    {
        $user = Auth::user();
        
        $padam = Pemadaman::join('trafos','trafos.id','=','pemadamen.id_trafo')
     ->select('pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.latitude as latitude','trafos.longitude as longitude','trafos.alamat as alamat')
     ->where('pemadamen.nama_petugas', $user->name)
     ;
     $padamTamu = $padam->get();
   $SD = Pemadaman::select('status')->where('status','=','Sedang Dikerjakan')->count();
  
 $today = Carbon::now();
 $month = $today->month;

$data = DB::table('laporan_pemadamen')
  ->join('trafos','trafos.id','=','laporan_pemadamen.id_trafo')
       ->select(
        DB::raw('laporan_pemadamen.penyulang as trafone'),
        DB::raw('count(*) as number'))
       ->whereMonth('jadwal_padam','=',$month)
       ->groupBy('trafone')
       ->get();
     $array[] = ['Jadwal Pemadaman', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->trafone,$value->number];
     }
     
   $BD = Pemadaman::select('status')->where('status','=','Belum Dikerjakan')->count();
   $S = Pemadaman::select('status')->where('status','=','Selesai')->count();
 // $kebutuhan_material = KebutuhanMaterial::join('trafos','trafos.id','=','kebutuhan_materials.id_trafo')
 //        ->join('materials','materials.id','=','kebutuhan_materials.id_material')
 //        ->select('kebutuhan_materials.*','materials.nama_material as nama_material','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
 //        ->get();
        return view('dashboard.dashboard', compact('padamTamu','SD','BD','S'))->with('jadwal_padam', json_encode($array));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
