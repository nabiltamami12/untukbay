<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemadaman;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use DB;
use App\LaporanPemadaman;
use App\Trafo;
use App\User;
use App\PeminjamanBarang;
use App\Material;
use Illuminate\Support\Facades\Input;
class PemadamanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $user = Auth::user();
        $data_trafo =Trafo::orderBy('kode_trafo','asc')->get();
        $pemadaman_petugas = Pemadaman::join('trafos','trafos.id','pemadamen.id_trafo')
          ->select('pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
          ->where('pemadamen.nama_petugas','=', $user->name)
          ->where('pemadamen.status','!=','Selesai')
          ->whereDate('jadwal_padam',now())
          ->orderBy('jadwal_padam','asc')
          ->get();

        $pemadaman_admin = Pemadaman::join('trafos','trafos.id','pemadamen.id_trafo')
          ->select('pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
          ->where('pemadamen.status','!=','Selesai')
          ->orderBy('jadwal_padam','asc')            
          ->get();
        
        //$pemadaman_admin->appends($request->only('keyword'));
        return view('admin_pln.padam.padam',compact('pemadaman_petugas','pemadaman_admin','data_trafo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
      $today = date('Y-m-d');
       $pet = User::all()->where('role','!=','admin');
        $user = Auth::user();
        $data_trafo =Trafo::orderBy('kode_trafo','asc')->get();
        $pemadaman_petugas = Pemadaman::all()->where('nama_petugas', $user->name);
        $pemadaman_admin = Pemadaman::all();
        return view('admin_pln.padam.create',compact('pemadaman_petugas','pemadaman_admin','data_trafo','pet'));
        
    }

  public function grid()
    {   
      
        $pemadaman_trafo =Trafo::orderBy('kode_trafo','asc')->paginate(6);
        return view('grid',compact('pemadaman_trafo'));
        
    }
      public function barang()
    {   
      
        $data_barang =Material::all();
        return view('admin_pln.padam.barang',compact('data_barang'));
        
    }

    public function PK()
    {   
      
          $today = date('Y-m-d');
       $pet = User::all()->where('role','!=','admin');
        $user = Auth::user();
        $data_trafo =Trafo::orderBy('kode_trafo','asc')->get();
        $pemadaman_petugas = Pemadaman::all()->where('tim', $user->role);
        $pemadaman_admin = Pemadaman::all();
        return view('admin_pln.padam.pk',compact('pemadaman_petugas','pemadaman_admin','data_trafo','pet'));
        
    }
     public function PK_STORE(Request $request)
    {   
      
          
        $i_kom =  array(
            "nomor_pk" => $request->nomor_pk,
            'nama_petugas'=> $request->nama_petugas,
            'tanggal_pk' => $request->tanggal_pk,
        );
        Perintah_Kerja::create($i_kom);
        // LaporanPemadaman::create($i_kom);
        return redirect('/addmore');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
          if (Pemadaman::where('id_trafo', '=',  $request->id_trafo)->where('jadwal_padam', '=',$request->jadwal_padam)->exists()) {
            return redirect()->back()->with('alert', 'Jadwal Sudah Ada!');
            
            
        }
        else{
    			if($request->awal_padam>$request->akhir_padam){
                              return redirect()->back()->with('alert', 'Waktu Awal Peamdaman Tidak Boleh melebihi Waktu Akhir Pemadaman!');

                }
          else{
         $ide_trafo = $request->id_trafo;
         $lat = DB::table('trafos')->where('id', $ide_trafo)->get('latitude');
         $lang = DB::table('trafos')->where('id', $ide_trafo)->get('longitude');
         
           // $lat = Trafo::select('latitude')->where('id',$ide_trafo);
           // $lang = Trafo::select('longitude')->where('id',$ide_trafo);
         

        $i_kom =  array(
            "nomor_pk" => $request->nomor_pk,
            "jadwal_padam" => $request->jadwal_padam,
            'awal_padam'=> $request->awal_padam,
            'akhir_padam'=> $request->akhir_padam,
            'id_trafo'=> $request->id_trafo,
            'deskripsi_pekerjaan'=> $request->deskripsi_pekerjaan,
            'unit_kerja'=> 'pln ulp jajag',
            'penyulang'=> $request->penyulang,
            'tim'=> $request->tim,
            'nama_petugas'=> $request->nama_petugas,
            'latitude'=> $lat,
            'longitude'=> $lang,
            'status' => 'Belum Dikerjakan',
        );
        Pemadaman::create($i_kom);
        // LaporanPemadaman::create($i_kom);
        return redirect('/addmore')->with('alert','Berhasil Menambahkan Jadwal');
          }
        }
            
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
      $pemadaman_admin = Pemadaman::findOrFail($id);
      $user = Auth::user();
       $pet = User::all()->where('role','!=','admin');

      $data_trafo = Trafo::orderBy('kode_trafo','asc')->get();
      $pemadaman_petugas = Pemadaman::where('tim', $user->username)->with('trafo_cek')->get();
      return view('admin_pln.padam.edit',compact('pemadaman_petugas','pemadaman_admin','data_trafo','pet'));
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
        
    			if($request->awal_padam>$request->akhir_padam){
                              return redirect()->back()->with('alert', 'Waktu Awal Peamdaman Tidak Boleh melebihi Waktu Akhir Pemadaman!');

                }
          else{
        $ide_trafo = $request->id_trafo;
        $lat = DB::table('trafos')->where('id', $ide_trafo)->get('latitude');
        $lang = DB::table('trafos')->where('id', $ide_trafo)->get('longitude');
        $i_kom =  array(
            "nomor_pk" => $request->nomor_pk,
          "jadwal_padam" => $request->jadwal_padam,
          'awal_padam'=> $request->awal_padam,
          'akhir_padam'=> $request->akhir_padam,
          'id_trafo'=> $request->id_trafo,
          'deskripsi_pekerjaan'=> $request->deskripsi_pekerjaan,
          'unit_kerja'=> 'pln ulp jajag',
          'penyulang'=> $request->penyulang,
           'tim'=> $request->tim,
            'nama_petugas'=> $request->nama_petugas,
          'latitude'=> $lat,
          'longitude'=> $lang,


          

      );

        Pemadaman::whereId($id)->update($i_kom);
        return redirect('padam')->with('alert','Berhasil Update Jadwal');
          }
        
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


    public function status($id)
    {
        Pemadaman::where('id', $id)->update(array('status' => 'Selesai'));

        return redirect('padam');

    }

    public function filter(Request $request)
    {
        $padam = Pemadaman::with('trafo_cek');
        if($request->from != ''){
            $padam = $padam->whereDate('created_at','>=',$request->from);        
        }
        if($request->to != ''){
            $padam = $padam->whereDate('created_at','<=',$request->to);        
        }
        $user = Auth::user();
        $data_trafo =Trafo::orderBy('kode_trafo','asc')->get();

        $pemadaman_admin = $padam->where('status','!=','Selesai')->orderBy('jadwal_padam','asc')->paginate(10);
        $pemadaman_petugas =  $padam->where('tim',$user->role)->where('status','!=','Selesai')->orderBy('jadwal_padam','asc')->paginate(10);
        return view('admin_pln.padam.index',compact('pemadaman_petugas','pemadaman_admin','data_trafo'));


    }

}
