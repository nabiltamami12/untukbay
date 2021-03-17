<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Input;
class AkunPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pet = User::all();
        // $pet = AkunPetugas::all();
       return view('admin_pln.akun.akun',compact('pet'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin_pln.akun.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            // 'tim' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string',
            'role' => 'string|max:255',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        if (User::where('name', '=',  $data['name'])->exists()
            &&
            User::where('username', '=', $data['username'])->exists()) {
           return redirect('akun')->with('alert', 'Akun Sudah Ada!');
       
       
   }
   else{
       User::create([
        'name' => $data['name'],
        'username' => $data['username'],
        'password' => bcrypt($data['password']),
        'role' => 'petugas',
        
    ]);

       $pet= User::all();
        // $pet = AkunPetugas::all();
       return view('admin_pln.akun.akun',compact('pet'))->with('alert','Berhasil Menambahkan Akun');
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
      $pet = User::findOrFail($id);
      return view('admin_pln.akun.edit',compact('pet'));
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
     
        $akun =  array(
          
           'name' => $request->input('name'),
           'username' => $request->input('username'),
           'password' => \Hash::make($request->input('password')),
           'role' => 'petugas',
       );
        User::whereId($id)->update($akun);
        $pet= User::all();
        // $pet = AkunPetugas::all();
        return view('admin_pln.akun.akun',compact('pet'))->with('alert','Berhasil Update Akun');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = User::findOrFail($id);
        $pet->delete();
      	return redirect('akun')->with('alert','Berhasil Menghapus Akun');
    }
}
