<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeminjamanMaterial;
use App\Material;
use Auth;
use App\LaporanPeminjaman;
class PeminjamanMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $nama_material = Material::all();
       $peminjaman_material = PeminjamanMaterial::join('materials', 'materials.id','=','peminjaman_materials.id_material')
        ->select('peminjaman_materials.*','materials.nama_material as nama_material','materials.kelompok_material as kelompok_material')
        ->where('tim', $user->role)
        ->whereDate('tanggal',now())
        ->get();
        return view('petugas_pln.peminjaman_material.transaksi_pinjam_material' , compact('peminjaman_material','nama_material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $nama_material = Material::all();         
      
   

        return view('petugas_pln.peminjaman_material.create',compact('nama_material'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = Auth::user();
      $hariIni = date('y-m-d');
      if (PeminjamanMaterial::where('id_material', '=',  $request->id_material)->where('tanggal', '=',$hariIni)->where('tim', '=',$user->role)->where('status', '=',  $request->status)->exists() ) {
        return redirect()->back()->with('alert', 'Anda Sudah Meminjam!');


        }
        else{
                if ($request->jumlah > Material::select('stok')->get()) {
                    return redirect()->back()->with('alert', 'Jumlah Tidak Boleh Melebihi Stok');
           

                }

                else{
        $input  = array(

        'id_material' => $request->id_material,
        'tanggal' => $hariIni,
        'tim' => $user->role,
        'status' => $request->status,
        'jumlah' => $request->jumlah,
        );
            PeminjamanMaterial::create($input);
            // LaporanPeminjaman::create($input);
//              LaporanPeminjaman::create($input)->groupBy(function($date) {
//             return Carbon::parse($date->created_at)->format('i');
// });
//             LaporanPeminjaman::create($input)->whereDate('tanggal',now())->groupBy(function($date) {
//             return Carbon::parse($date->created_at)->format('d');
// });
        


    


        $id_stock = $request->id_material;
        // $kurangin_stok = $request->jumlah;
        if ($input['status']=='pinjam') {
            Material::where('id', $id_stock)->decrement('stok', $input['jumlah']);
            
        }
        elseif ($input['status']=='kembali') {
            Material::where('id', $id_stock)->increment('stok', $input['jumlah']);

        }   

     // $jumlah_sebelum = KebutuhanMaterial::whereId($id)->('jumlah')->get();
     // KebutuhanMaterial::whereId($id)->update('jumlah',0);
     // PeminjamanMaterial::where('id_material', $simpan['id_material'])->increment('jumlah', $jumlah_sebelum);
     // KebutuhanMaterial::whereId($id)->update($simpan);
     // PeminjamanMaterial::where('id_material', $simpan['id_material'])->decrement('jumlah', $simpan['jumlah']);
     // Material::where('id', $simpan['id_material'])->increment('jumlah', $simpan['jumlah']);



return redirect('pinjam_material')->with('alert','Berhasil Menambahkan Data');
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

        $id_peminjaman = PeminjamanMaterial::findOrFail($id);
        Material::where('id', $id_peminjaman->id_material)->increment('stok', $id_peminjaman->jumlah);
        $nama_material = Material::all();
        $peminjaman_material = PeminjamanMaterial::with('material_cek')->get();

        return view('petugas_pln.peminjaman_material.edit_transaksi_pinjam_material' , compact('peminjaman_material','nama_material','id_peminjaman'));
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
      $user = Auth::user();
      $hariIni = date('y-m-d');

        $input  = array(

            'id_material' => $request->id_material,
            'tanggal' => $hariIni,
            'tim' => $user->role,
            'status' => $request->status,
            'jumlah' => $request->jumlah,



        );
      PeminjamanMaterial::whereId($id)->update($input);
      // LaporanPeminjaman::create($input);

        $id_stock = $request->id_material;


        $lastRecordMaterial = Material::orderBy('updated_at', 'DESC')->first();
        $material_last = $lastRecordMaterial->stok;

        $id_stock = $request->id_material;
        // $kurangin_stok = $request->jumlah;
        if ($input['status']=='pinjam') {
            Material::where('id', $id_stock)->decrement('stok', $input['jumlah']);
            
        }
        elseif ($input['status']=='kembali') {
            Material::where('id', $id_stock)->increment('stok', $input['jumlah']);

        }                               
        



        return redirect('pinjam_material')->with('alert','Berhasil Mengupdate Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_peminjaman = PeminjamanMaterial::findOrFail($id);
         Material::where('id', $id_peminjaman->id_material)->increment('stok', $id_peminjaman->jumlah);
         PeminjamanMaterial::where('id',$id)->delete();
         return redirect('pinjam_material'); 
 }
}
