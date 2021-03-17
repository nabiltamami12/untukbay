<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductStock;
use App\Pemadaman;
use Illuminate\Support\Facades\Auth;
use App\PekerjaanPetugas;
class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $user = Auth::user();
        $PK = Pemadaman::select('nomor_pk')->latest('nomor_pk')->whereDate('jadwal_padam',now())
        ->where('nama_petugas','=', $user->name)->first();
        $data_barang = ProductStock::all()->where('nomor_pk',$PK);
        $Pekerjaan_HariIni = PekerjaanPetugas::all()->where('nomor_pk',$PK->nomor_pk);
        $pemadaman_petugas = Pemadaman::all()->where('nama_petugas', $user->name);

        return view('petugas_pln.cek_kondisi_material.create', compact('PK','data_barang','Pekerjaan_HariIni','pemadaman_petugas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'addmore.*.nomor_pk' => 'required',
            'addmore.*.nama_barang' => 'required',
            'addmore.*.jumlah' => 'required',
            'addmore.*.fotoSebelum' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'addmore.*.fotoSesudah' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        foreach ($request->addmore as  $value) {

        
         $imageName = time().'.'.$value['fotoSebelum']->extension();  
         $value['fotoSebelum']->move(public_path('cek_kondisi_trafo_sebelum'), $imageName);

         $imageName2 = time().'.'.$value['fotoSesudah']->extension();  
         $value['fotoSesudah']->move(public_path('cek_kondisi_trafo_setelah'), $imageName2);
         // dd($i_kom);
          $i_kom =  array(
            "nomor_pk" => $value['nomor_pk'],
            "nama_barang" =>  $value['nama_barang'],
            'jumlah'=>  $value['jumlah'],
            'fotoSebelum'=>  $imageName,
            'fotoSesudah'=>  $imageName2,
            
        );
PekerjaanPetugas::create($i_kom);

     }
    // foreach ($request->addmore as $key => $value) {
    //     PekerjaanPetugas::create($value);


    // }

    // return redirect('/padam')->with('success','Berhasil Menambahkan Jadwal');
       // Pemadaman::where('id', $id)->update(array('status' => 'Sedang Dikerjakan'));

        return back()->with('success', 'Data Berhasil Disimpan');

 }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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

  public function status($id)
    {
       Pemadaman::where('id', $id)->update(array('status' => 'Selesai Dikerjakan'));
    return redirect('/padam');

    // return redirect('/padam')->with('success','Berhasil Menambahkan Jadwal');

   // LaporanPemadaman::where('id', $id)->update(array('status' => 'Sedang Dikerjakan'));
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
