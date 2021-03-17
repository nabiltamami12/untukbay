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
Route::get('/dashboard', 'UmumController@dashboard');

// Route::get('/dashboard', function () {
//     return view('/dashboard/dashboard');
// });
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


     /* <!-- Menu Material --> */

Route::get('/grid', 'PemadamanController@grid');
Route::get('/padam', 'PemadamanController@index');
Route::get('/padam/create', 'PemadamanController@create');
Route::get('/padam/PK', 'PemadamanController@PK');
Route::GET('/padam/barang', 'PemadamanController@barang');
Route::get("addmore","ProductAddMoreController@addMore");
Route::post("addmore","ProductAddMoreController@addMorePost")->name('addmorePost');
// Route::get('tampil', function () {
//     return view('admin_pln.padam.tampil');
// });
Route::POST('/padam/PK_STORE', 'PemadamanController@PK_STORE');
Route::get('/padam/filter', 'PemadamanController@filter')->name('padam.filter');
Route::get('/padam/pdf/{daterange}', 'PemadamanController@datatables')->name('padam.order_pdf');
Route::POST('/padam/store', 'PemadamanController@store');
Route::get('/padam/edit/{id}', 'PemadamanController@edit');
Route::POST('/padam/update/{id}', 'PemadamanController@update');
Route::get('/padam/{id}', 'PemadamanController@destroy');
Route::get('/padam/status/{id}', 'PemadamanController@status');
// Route::POST('/cari', 'JadwalPadamController@cari');

});
Route::group(['middleware' => 'petugas'], function () {

Route::get('/pekerjaan', 'PekerjaanController@show');
Route::get('/pekerjaan/create', 'PekerjaanController@create');
Route::POST('/pekerjaan/store', 'PekerjaanController@store')->name('store.pekerjaan');
Route::get('/pekerjaan/edit/{id}', 'PekerjaanController@edit');
Route::POST('/pekerjaan/update/{id}', 'PekerjaanController@update');
Route::get('/pekerjaan/{id}', 'PekerjaanController@destroy');
Route::get('/pekerjaan/status/{id}', 'PekerjaanController@status');



Route::get('/pinjam_material/', 'PeminjamanMaterialController@index');
Route::get('/pinjam_material/create', 'PeminjamanMaterialController@create');
Route::POST('/pinjam_material/store', 'PeminjamanMaterialController@store')->name('store.');
Route::get('/pinjam_material/edit/{id}', 'PeminjamanMaterialController@edit');
Route::POST('/pinjam_material/update/{id}', 'PeminjamanMaterialController@update');
Route::get('/pinjam_material/{id}', 'PeminjamanMaterialController@destroy');
});


Route::group(['middleware' => 'admin'], function () {



   
    /* <!-- Menu Material --> */
     /* <!-- Menu Material --> */


   
    /* <!-- Menu Material --> */

      /* <!-- Menu Material --> */

Route::get('/material', 'MaterialController@show');
Route::get('/material/create', 'MaterialController@create');
Route::POST('/material/store', 'MaterialController@store');
Route::get('/material/edit/{id}', 'MaterialController@edit');
Route::POST('/material/update/{id}', 'MaterialController@update');
Route::get('/material/{id}', 'MaterialController@destroy');
   
    /* <!-- Menu Material --> */
    /* <!-- Menu Komponen --> */

// Route::get('/komponen', 'KomponenController@index');
// Route::POST('/komponen/store', 'KomponenController@store');
// Route::get('/komponen/edit/{id}', 'KomponenController@edit');
// Route::POST('/komponen/update/{id}', 'KomponenController@update');
// Route::get('/komponen/{id}', 'KomponenController@esdtroy');

    /* <!-- Menu Komponen --> */
    /* <!-- Menu Trafo --> */
Route::get('/trafo', 'TrafoController@index');
Route::get('/trafo/create', 'TrafoController@create');
Route::POST('/trafo/store', 'TrafoController@store')->name('store.trafo');
Route::get('/trafo/edit/{id}', 'TrafoController@edit');
Route::get('/trafo/histori/{id}', 'TrafoController@histori');
Route::get('/trafo/histori/cetak/{id}', 'TrafoController@cetak_pdf');
Route::POST('/trafo/update/{id}', 'TrafoController@update');
Route::get('/trafo/{id}', 'TrafoController@destroy');
   /* <!-- Menu Trafo --> */
  /* <!-- Menu Petugas --> */
// Route::get('/petugas', 'PetugasController@index');
// Route::POST('/petugas/store', 'PetugasController@store');
// Route::get('/petugas/edit/{id}', 'PetugasController@edit');
// Route::POST('/petugas/update/{id}', 'PetugasController@update');
// Route::get('/petugas/{id}', 'PetugasController@destroy');
  /* <!-- Menu Petugas --> */

  /* <!-- Menu Petugas --> */
Route::get('/akun', 'AkunPetugasController@index');
Route::get('/akun/create', 'AkunPetugasController@create');
Route::POST('/akun/store', 'AkunPetugasController@store');
Route::get('/akun/edit/{id}', 'AkunPetugasController@edit');
Route::POST('/akun/update/{id}', 'AkunPetugasController@update');
Route::get('/akun/{id}', 'AkunPetugasController@destroy');
  /* <!-- Menu Petugas --> */
  /* <!-- Menu Laporan --> */
Route::get('/laporan/all', 'LaporanController@index');

Route::get('/laporan/pemadaman', 'LaporanController@laporan_pemadaman');
Route::get('/laporan/pekerjaan', 'LaporanController@laporan_pekerjaan');
Route::get('/laporan/peminjaman_material', 'LaporanController@laporan_peminjaman_material');


Route::get('/laporan/pemadaman/filter', 'LaporanController@filter_pemadaman')->name('laporan_pamadaman.filter');
Route::get('/laporan/pekerjaan/filter', 'LaporanController@filter_pekerjaan')->name('laporan_pekerjaan.filter');
Route::get('/laporan/peminjaman_material/filter', 'LaporanController@filter_peminjaman_material')->name('laporan_peminjaman_material.filter');
Route::get('/laporan/{id}', 'LaporanController@destroy');

  /* <!-- Menu Laporan --> */



Route::get('/laporan/pemadaman/cetak', 'LaporanController@cetak_laporan_pemadaman');
Route::get('/laporan/pekerjaan/cetak', 'LaporanController@cetak_laporan_pekerjaan');
Route::get('/laporan/peminjaman_material/cetak', 'LaporanController@cetak_laporan_peminjaman_material');



});





  
// Route::get('/admin', 'AdminController@index');
// Route::get('/padam', 'JadwalPadamController@index');

// Route::get('/laporan', 'LaporanController@index');

Route::get('/darurat', function () {
    return view('darurat');
});


Route::get('/', 'UmumController@index');
Auth::routes();
Route::get('notif', function () {
    return view('umum.notif');
});

Route::get('/report', function () {
    Artisan::call('report:insert');
 return "Sukses";
    //
});


Route::get('/report2', function () {
    


      $data_padam = DB::table('pemadamen')
          ->join('trafos','trafos.id','pemadamen.id_trafo')
          ->select('pemadamen.*','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat','trafos.latitude as lat','trafos.longitude as lang')
          ->orderBy('jadwal_padam','asc')            
          ->get();
foreach ($data_padam as  $value) {


   $i_kom =  array(
          "nomor_pk" => $value->nomor_pk,
            "jadwal_padam" => $value->jadwal_padam,
            'awal_padam'=> $value->awal_padam,
            'akhir_padam'=> $value->akhir_padam,
            'id_trafo'=> $value->id_trafo,
            'deskripsi_pekerjaan'=> $value->deskripsi_pekerjaan,
            'unit_kerja'=> 'pln ulp jajag',
            'penyulang'=> $value->penyulang,
            'tim'=> $value->tim,
            'nama_petugas'=> $value->nama_petugas,
            'latitude'=> $value->lat,
            'longitude'=> $value->lang,
            'status' => $value->status,
             'created_at' => $value->created_at,
        'updated_at' => $value->updated_at,
        );

 DB::table('laporan_pemadamen')->insert($i_kom);
        // echo "Kenek Lurd, Hehe :)";
}


        // $kebutuhan_material = DB::table('kebutuhan_materials')
        // ->join('trafos','trafos.id','=','kebutuhan_materials.id_trafo')
        // ->join('materials','materials.id','=','kebutuhan_materials.id_material')
        // ->select('kebutuhan_materials.*','materials.nama_material as nama_material','trafos.kode_trafo as kode_trafo','trafos.alamat as alamat')
        // ->get();
$lap =  DB::table('pekerjaan_petugas')->get();

foreach ($lap as  $value) {
   

  $simpan = array(
        'nomor_pk' => $value->nomor_pk,
        'nama_barang' => $value->nama_barang,
        'jumlah' => $value->jumlah,
        'fotoSebelum' => $value->fotoSebelum,
        'fotoSesudah' => $value->fotoSesudah,
         'created_at' => $value->created_at,
        'updated_at' => $value->updated_at,

    );
 DB::table('laporan_pekerjaan_petugas')->insert($simpan);
}
  
  
 return "Sukses";
    //
});

Route::get('/clear_cache', function () {

    \Artisan::call('config:clear');
  return "Sukses";

});
Route::get('/dump-autoload', function()
{
   \Artisan::call('config:clear');
  exec('composer update');
    exec('composer dump-autoload');
   return "Sukses";
});


// Route::get('/home', 'HomeController@index')->name('home');

