@extends('layouts.app')
      @section('content')
       <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
       </a> -->
       <?php
       $title = 'Tambah Akun Petugas';?>
       <title>
         <?php echo $title;?>
       </title>
       <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block " style="background-image: url('{{ asset('startbootstrap-sb-admin-2-master/img/lampu_pln.jpeg')}} '); background-size: contain;background-position: center"></div>
              <div class="col-lg-7" >
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">TAMBAH AKUN PETUGAS</h1>
                  </div>
                  <form class="user" action="{{url('/akun/store' )}}" method="POST">
                    @csrf                  
                    <!-- <div class="form-group row">
                      <div class="col-sm-2" style="margin-top: 13px;"  >
                        Awal :
                      </div>
                      <div class="col-sm-4 mb-3 mb-sm-0">
                        <input type="time" class="form-control form-control-user" name="awal_padam" id="exampleFirstName" placeholder="Awal Padam">
                      </div>
                       <div class="col-sm-2" style="margin-top: 13px;">
                        Akhir :
                      </div>
                      <div class="col-sm-4">
                        <input type="time" class="form-control form-control-user"name="akhir_padam" id="exampleLastName" placeholder="Akhir Padam" >
                      </div>
                    </div> -->
                    <!-- <div class="form-group">
                      <input type="date" class="form-control form-control-user"name="jadwal_padam" id="exampleInputEmail" placeholder="Tanggal Pemadaman" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user"name="wilayah_padam" id="exampleInputEmail" placeholder="Wilayah Pemadaman">
                    </div> -->
                    <!-- <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user"name="penyulang" id="exampleFirstName" placeholder="Penyulang">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user"name="tim" id="exampleLastName" placeholder="Tim">

                      </div>
                    </div> -->
                    <div class="form-group">
                     <!--  <input type="text" class="form-control form-control-user"name="deskripsi_pekerjaan" id="exampleInputEmail" placeholder="Tim"> -->
                    <!--  <select class="custom-select form-control"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " required  name="tim">
                      <option disabled selected value="">-TIM-</option>                  
                      <option value="prefentif11">prefentif 11 </option>
                      <option value="prefentif12"> prefentif 12</option>
                      <option value="jajag6"> jajag 6</option>
                      <option value="jajag7">jajag 7 </option>
                      <option value="inspeksi1">inspeksi 1 </option>
                      <option value="inspeksi2">inspeksi 2 </option>
                      <option value="kesilir6"> kesilir 6</option>

                    </select>    -->
                     <input type="text" required class="form-control form-control-user"name="name" id="exampleInputEmail" placeholder="Nama Petugas">
                  </div>
                  <div class="form-group">
                    <input type="text" required class="form-control form-control-user"name="username" id="exampleInputEmail" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="text" required class="form-control form-control-user"name="password" id="exampleInputEmail" placeholder="Password">
                  </div>
                  <hr>
                <button type="submit" style="color: #fff" class="btn btn-primary">
                  <i class="fas fa-save" ></i> Simpan
                </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection