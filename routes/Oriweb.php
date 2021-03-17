<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group( ['middleware' => 'auth' ], function()
{
// Route::group( ['middleware' => 'roles:admin'], function (){
Route::get('/dashboard', function () {
    return view('/dashboard/dashboard');
});
Route::get('/dashboard', function () {
    return view('/dashboard/dashboard');
});


     /* <!-- Menu Material --> */

Route::get('/padam', 'JadwalPadamController@index');
Route::POST('/padam/store', 'JadwalPadamController@store');
Route::get('/padam/edit/{id}', 'JadwalPadamController@edit');
Route::POST('/padam/update/{id}', 'JadwalPadamController@update');
Route::get('/padam/{id}', 'JadwalPadamController@destroy');
   
    /* <!-- Menu Material --> */
    
      /* <!-- Menu Material --> */

// Route::get('/material', 'MaterialController@index')->middleware('admin');;
// Route::POST('/material/store', 'MaterialController@store')->middleware('admin');;
// Route::get('/material/edit/{id}', 'MaterialController@edit')->middleware('admin');;
// Route::POST('/material/update/{id}', 'MaterialController@update')->middleware('admin');;
// Route::get('/material/{id}', 'MaterialController@destroy')->middleware('admin');;
   
    /* <!-- Menu Material --> */
    /* <!-- Menu Komponen --> */

// Route::get('/komponen', 'KomponenController@index')->middleware('admin');;
// Route::POST('/komponen/store', 'KomponenController@store')->middleware('admin');;
// Route::get('/komponen/edit/{id}', 'KomponenController@edit')->middleware('admin');;
// Route::POST('/komponen/update/{id}', 'KomponenController@update')->middleware('admin');;
// Route::get('/komponen/{id}', 'KomponenController@destroy')->middleware('admin');;

    /* <!-- Menu Komponen --> */
    /* <!-- Menu Trafo --> */
Route::get('/trafo', 'TrafoController@index');;
Route::POST('/trafo/store', 'TrafoController@store')->name('store.trafo');;
Route::get('/trafo/edit/{id}', 'TrafoController@edit');;
Route::POST('/trafo/update/{id}', 'TrafoController@update');;
Route::get('/trafo/{id}', 'TrafoController@destroy');;
   /* <!-- Menu Trafo --> */
  /* <!-- Menu Petugas --> */
// Route::get('/petugas', 'PetugasController@index')->middleware('admin');;
// Route::POST('/petugas/store', 'PetugasController@store')->middleware('admin');;
// Route::get('/petugas/edit/{id}', 'PetugasController@edit')->middleware('admin');;
// Route::POST('/petugas/update/{id}', 'PetugasController@update')->middleware('admin');;
// Route::get('/petugas/{id}', 'PetugasController@destroy')->middleware('admin');;
  /* <!-- Menu Petugas --> */

  /* <!-- Menu Petugas --> */
Route::get('/akun', 'AkunPetugasController@index');;
Route::POST('/akun/store', 'AkunPetugasController@store');;
Route::get('/akun/edit/{id}', 'AkunPetugasController@edit');;
Route::POST('/akun/update/{id}', 'AkunPetugasController@update');;
Route::get('/akun/{id}', 'AkunPetugasController@destroy');;
  /* <!-- Menu Petugas --> */
  /* <!-- Menu Laporan --> */

Route::get('/laporan', 'LaporanController@index');
Route::POST('/laporan/store', 'LaporanController@store');
Route::get('/laporan/edit/{id}', 'LaporanController@edit');
Route::POST('/laporan/update/{id}', 'LaporanController@update');
Route::get('/laporan/{id}', 'LaporanController@destroy');

  /* <!-- Menu Laporan --> */

Route::get('/ceklis', 'CeklisController@index');
Route::POST('/ceklis/store', 'CeklisController@store');
Route::get('/ceklis/edit/{id}', 'CeklisController@edit');
Route::POST('/ceklis/update/{id}', 'CeklisController@update');
Route::get('/ceklis/{id}', 'CeklisController@destroy');





  
// Route::get('/admin', 'AdminController@index');
// Route::get('/padam', 'JadwalPadamController@index');

// Route::get('/laporan', 'LaporanController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/cobacheckbox
', function () {
    return view('cobacheckbox
');
    
});


});
// Route::group( ['middleware' => 'auth:super' ], function()
// {
//     /* <!-- Menu Material --> */

// Route::group( ['middleware' => 'roles:petugas'], function (){


   
    /* <!-- Menu Material --> */
 /* <!-- Menu Material --> */

// Route::get('/ceklis', 'CeklisController@index');
// Route::POST('/ceklis/store', 'CeklisController@store');
// Route::get('/ceklis/edit/{id}', 'CeklisController@edit');
// Route::POST('/ceklis/update/{id}', 'CeklisController@update');
// Route::get('/ceklis/{id}', 'CeklisController@destroy');
   
    /* <!-- Menu Material --> */

  // });



// Route::group( ['middleware' => 'roles:petugas'], function (){
// Route::get('/padam', 'JadwalPadamController@index');
// Route::POST('/padam/store', 'JadwalPadamController@store');
// Route::get('/padam/edit/{id}', 'JadwalPadamController@edit');
// Route::POST('/padam/update/{id}', 'JadwalPadamController@update');
// Route::get('/padam/{id}', 'JadwalPadamController@destroy');
//   });

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

