<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductStock;
use App\Pemadaman;

class ProductAddMoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMore()
    {
        $PK = Pemadaman::select('nomor_pk')->latest('nomor_pk')->first();
        return view("admin_pln.padam.barang", compact('PK'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.nomor_pk' => 'required',
            'addmore.*.nama_barang' => 'required',
            'addmore.*.jumlah' => 'required',
        ]);
    
        foreach ($request->addmore as $key => $value) {
            ProductStock::create($value);
        }
        return redirect('/padam')->with('success','Berhasil Menambahkan Jadwal');
    
        // return back()->with('success', 'Record Created Successfully.');

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
