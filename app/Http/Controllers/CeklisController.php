<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemadaman;
use App\LaporanMaterial;
use App\KebutuhanMaterial;

use App\PeminjamanMaterial;
use App\Material;
use App\Trafo;
use DB;
use Illuminate\Support\Facades\Auth;
use App\LaporanPemadaman;
use App\LaporanPeminjaman;

class CeklisController extends Controller
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
    public function create()
    {
        $user = Auth::user();
        $peminjaman = PeminjamanMaterial::with('material_cek')->whereDate('tanggal',now())
        ->where('tim', $user->role)
        ->where('status', 'pinjam')
        ->get();

        $material_peminjaman = PeminjamanMaterial::join('materials', 'materials.id','=','peminjaman_materials.id_material')
        ->select('peminjaman_materials.*','materials.nama_material as nama_material','materials.kelompok_material as kelompok_material')
        ->whereDate('tanggal',now())
        ->where('tim', $user->role)
        ->where('status', 'pinjam')
        ->get();

        $user = Auth::user();
        $padam = Pemadaman::where('tim', $user->username)->where('status','!=','Selesai')->with('trafo_cek')->get();
        return view('petugas_pln.cek_kondisi_material.create', compact('peminjaman','padam','material_peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       // dd($request->idne);

    $today = date('Y-m-d');
       
        if (KebutuhanMaterial::where('id_material', '=',  $request->id_material)->where('tim', '=',$request->tim)->where('tanggal', '=',  $today)->exists()) {
           return redirect()->back()->with('alert', 'Material Sudah Ditambahkan!');
       
       
   }
   else{

    $request->validate([

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    

    $imageName = time().'.'.$request->image->extension();  

    

    $request->image->move(public_path('cek_kondisi_trafo_sebelum'), $imageName);
     
     
    $request->validate([

        'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    

    $imageName2 = time().'.'.$request->image2->extension();  

    

    $request->image2->move(public_path('cek_kondisi_trafo_setelah'), $imageName2);
     
     
    $simpan = array(
        'tanggal' => $today,
        'id_peminjaman' => $request->id_peminjaman,
        'id_material'=> $request->id_material,
        'keterangan' => $request->keterangan,
        'tim' => $request->tim,
        //'status'=> 'buruk',
        'jumlah'=> $request->jumlah,
        'foto_sebelum' => $imageName,
       'foto_setelah' => $imageName2,
        'id_trafo' => $request->id_trafo,

    );
    
 // $buatPeminjaman = array(

 //        'id_material' => $request->id_material,
 //        'tanggal' => $today,
 //       'tim' => $request->tim,
 //        'status' => 'kembali',
 //        'jumlah' => $request->jumlah,

 // );
 // dd($simpan);
// }

    // LaporanMaterial::create($simpan);
    // PeminjamanMaterial::create($buatPeminjaman);
    KebutuhanMaterial::create($simpan);
    PeminjamanMaterial::where('id_material', $simpan['id_material'])->decrement('jumlah', $simpan['jumlah']);
    // LaporanMaterial::create($simpan);
    $id_materials = KebutuhanMaterial::all();

    foreach ($id_materials as $id) {
        Trafo::where('id', $request->id_trafo)->update(array('id_material' => $id->id));
    }

    Pemadaman::where('id', $request->id_padam)->update(array('status' => 'Sedang Dikerjakan'));
    
        $id_stock = $request->id_material;
        Material::where('id', $id_stock)->increment('stok', $simpan['jumlah']);



    return redirect('kondisi_material')->with('image',$imageName)->with('alert','Berhasil Menambahkan Data');
}
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        $user = Auth::user();

        $padam = Pemadaman::where('tim', $user->username)->where('status','!=','Selesai')->with('trafo_cek')->get();
 // $id_jadpet = $id;
        $tra =Trafo::all();
        $hariIni = date('y-m-d');




        $peminjaman = PeminjamanMaterial::with('material_cek')->whereDate('tanggal',now())
        ->where('tim', $user->role)
        ->get();
// $kebutuhan_material = KebutuhanMaterial::with('material_cek')->get();
        $kebutuhan_material = KebutuhanMaterial::join('trafos','trafos.id','=','kebutuhan_materials.id_trafo')
        ->join('materials','materials.id','=','kebutuhan_materials.id_material')
        ->select('kebutuhan_materials.*','materials.nama_material as nama_material','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
        ->where('tim', $user->role)
        ->whereDate('tanggal',now())
        ->get();

        
        
        return view('petugas_pln.cek_kondisi_material.cek_kondisi_material',compact('padam','tra','peminjaman','kebutuhan_material'));  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
       Pemadaman::where('id', $id)->update(array('status' => 'Sedang Dikerjakan'));
   // LaporanPemadaman::where('id', $id)->update(array('status' => 'Sedang Dikerjakan'));
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
    $today = date('Y-m-d');
       
    $request->validate([

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    

    $imageName = time().'.'.$request->image->extension();  

    

    $request->image->move(public_path('cek_kondisi_trafo_sebelum'), $imageName);
     
     
    $request->validate([

        'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    

    $imageName2 = time().'.'.$request->image2->extension();  

    

    $request->image2->move(public_path('cek_kondisi_trafo_setelah'), $imageName2);
    $simpan = array(
        'tanggal' => $today,
        'id_material'=> $request->id_material,
        'keterangan' => $request->keterangan,
        'tim' => $request->tim,
        //'status'=> 'buruk',
        'jumlah'=> $request->jumlah,
        'foto_sebelum' => $imageName,
       'foto_setelah' => $imageName2,
        'id_trafo' => $request->id_trafo,

    );
	 
  
      LaporanMaterial::create($simpan);
    // PeminjamanMaterial::create($buatPeminjaman);
    KebutuhanMaterial::findOrFail($id)->update($simpan);
    PeminjamanMaterial::where('id_material', $simpan['id_material'])->decrement('jumlah', $simpan['jumlah']);
    // LaporanMaterial::create($simpan);
    $id_materials = KebutuhanMaterial::all();

    foreach ($id_materials as $id) {
        Trafo::where('id', $request->id_trafo)->update(array('id_material' => $id->id));
    }

    Pemadaman::where('id', $request->id_padam)->update(array('status' => 'Sedang Dikerjakan'));
    
        $id_stock = $request->id_material;
        Material::where('id', $id_stock)->increment('stok', $simpan['jumlah']);



      return redirect('kondisi_material')->with('alert','Berhasil Mengupdate Data'); 


  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     // $id_cek_hapus = KebutuhanMaterial::findOrFail($id);
     // dd($id_cek_hapus->id_peminjaman);
     // PeminjamanMaterial::where('id', $id_cek_hapus->id_peminjaman)->increment('jumlah', $id_cek_hapus->jumlah);
     // Material::where('id', $id_cek_hapus->id_material)->increment('stok', $id_cek_hapus->jumlah);
     KebutuhanMaterial::where('id',$id)->delete();
     return redirect('kondisi_material'); 
 }


 public function edit($id)
 { 
         $user = Auth::user();
     $id_ubah = KebutuhanMaterial::findOrFail($id);
     PeminjamanMaterial::where('id', $id_ubah->id_peminjaman)->increment('jumlah', $id_ubah->jumlah);
     Material::where('id', $id_ubah->id_material)->increment('stok', $id_ubah->jumlah);
     $peminjaman = PeminjamanMaterial::with('material_cek')->whereDate('tanggal',now())
        ->where('tim', $user->role)
        ->where('status', 'pinjam')
        ->get();   
    $cek = KebutuhanMaterial::findOrFail($id);
          $material_peminjaman = PeminjamanMaterial::join('materials', 'materials.id','=','peminjaman_materials.id_material')
        ->select('peminjaman_materials.*','materials.nama_material as nama_material','materials.kelompok_material as kelompok_material')
        ->whereDate('tanggal',now())
        ->where('tim', $user->role)
        ->where('status', 'pinjam')
        ->get();
        $padam = Pemadaman::where('tim', $user->username)->where('status','!=','Selesai')->with('trafo_cek')->get();
    return view('petugas_pln.cek_kondisi_material.edit_cek_kondisi_material', compact('cek','peminjaman','padam','material_peminjaman'));

}

}
