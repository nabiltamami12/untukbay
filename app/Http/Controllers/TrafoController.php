<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trafo;
// use App\KebutuhanMaterial;
use DB;
use PDF;
class TrafoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(request $request)
    {



     $sta_tra = DB::table('trafos')
        ->groupBy('trafos.id')
        ->orderBy('kode_trafo')->get();





      return view('admin_pln.trafo.index', compact('sta_tra'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function histori($id)
    {
     $sta_tra = $id;

       //   $histori = KebutuhanMaterial::join('trafos', 'trafos.id', '=', 'kebutuhan_materials.id_trafo')
       // ->join('materials', 'materials.id', '=', 'kebutuhan_materials.id_material')
       // ->select('kebutuhan_materials.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','materials.nama_material as nama_material')
       // ->where('id_trafo', $id )
       // ->get();
     return view('admin_pln.laporan.histori.histori_trafo', compact(
      // 'histori',
      'sta_tra'));
     
   }


   public function cetak_pdf($id)
   {

     // $histori = KebutuhanMaterial::join('trafos', 'trafos.id', '=', 'kebutuhan_materials.id_trafo')
     //   ->join('materials', 'materials.id', '=', 'kebutuhan_materials.id_material')
     //   ->select('kebutuhan_materials.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','materials.nama_material as nama_material')
     //   ->where('id_trafo', $id )
     //   ->get();

    // $pdf = PDF::loadView('admin_pln.laporan.download.cetak_laporan_trafo', compact('histori'))->setPaper('a4', 'landscape');
    // return $pdf->stream();
    
    
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // echo "gagal";
      if (Trafo::where('kode_trafo', '=',  $request->kode_trafo)->exists()) {
       return redirect()->back()->with('alert', 'Trafo Sudah Ada!');


     }
     else{

      $request->validate([

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);



      $imageName = time().'.'.$request->image->extension();  



      $request->image->move(public_path('gambar_trafo'), $imageName);

// json_encode($values)

      $input =  array(
       "kode_trafo" => $request->kode_trafo,
       'alamat'=> $request->alamat,
       'seksen'=> $request->seksen,
       'gambar'=> $imageName,
       'latitude'=> $request->latitude,
       'longitude'=> $request->longitude,
       // 'status' => $request->status,
       'tanggal_pemasangan' => $request->tanggal_pemasangan,         

     );    

      Trafo::create($input);
      if ($input==true) {
        # code...
      
      return redirect('trafo')
      ->with('image',$imageName)->with('alert','Berhasil Menambahkan Data');}
      else{
        return redirect()->back()->with('alert','Gagal Input');
      }
    }
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     $trafo = Trafo::findOrFail($id);
     return view('admin_pln.trafo.edit', compact('trafo'));
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
      $request->validate([

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);



      $imageName = time().'.'.$request->image->extension();  



      $request->image->move(public_path('gambar_trafo'), $imageName);


      $input =  array(
       'kode_trafo' => $request->kode_trafo,
       'alamat'=> $request->alamat,
       'seksen'=> $request->seksen,
       'gambar'=> $imageName,
       'latitude'=> $request->latitude,
       'longitude'=> $request->longitude,
       // 'status' => $request->status,
       'tanggal_pemasangan' => $request->tanggal_pemasangan,  


     );


      Trafo::whereId($id)->update($input);
      return redirect('trafo')
      ->with('image',$imageName)->with('alert','Berhasil Update Data');
// dd($input);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $trafo=Trafo::where('id',$id)->delete();
     return redirect('trafo')->with('alert','Berhasil Menghapus Data'); 
   }

 public function create()
    {
    return view('admin_pln.trafo.create');
   }

 }
