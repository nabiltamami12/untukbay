<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemadaman;
use App\KebutuhanMaterial;
use App\Material;
use App\Trafo;

class MaterialController extends Controller
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
    public function create()
    {
        return view('admin_pln.material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input  = array(

            // 'id_trafo' => $request->id_trafo,
            'nama_material' => $request->nama_material,
            'kelompok_material' => $request->kelompok_material,
            'seksen' => $request->seksen,
            'stok' => $request->stok,



        );
        Material::create($input);
        return redirect('material')->with('alert','Berhasil Menambahkan Data');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $mat)
    {
        $ori_mat = Material::all();
        // $lap = KebutuhanMaterial::with('trafo_cek')->paginate(5);
        return view('admin_pln.material.material', compact(
            // 'lap',
             'ori_mat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ori_mat = Material::findOrFail($id);
        // $lap = KebutuhanMaterial::with('trafo_cek')->paginate(5);
        return view('admin_pln.material.edit_stok_material', compact(
            // 'lap',
             'ori_mat'));
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
        $input  = array(

            // 'id_trafo' => $request->id_trafo,
            'nama_material' => $request->nama_material,
            'kelompok_material' => $request->kelompok_material,
            'seksen' => $request->seksen,
            'stok' => $request->stok,



        );
        Material::whereId($id)->update($input);
        return redirect('material')->with('alert','Berhasil Update Data');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $lap=Material::where('id',$id)->delete();
      return redirect('material')->with('alert','Berhasil Menghapus Data'); 
  }
}
