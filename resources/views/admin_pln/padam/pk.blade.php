    @extends('layouts.app')
    @section('content')
     <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
     </a> -->

     <?php
     $title = 'Tambah Jadwal Pemadaman';?>
     <title>
       <?php echo $title;?>
     </title>
           @if (session('alert'))
    <div class="alert" role="alert" id="myAlert">
        <div class="col-sm-12">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-danger">Terjadi Kesalahan</span> {{ session('alert') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
     <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block " style="background-image: url('{{ asset('startbootstrap-sb-admin-2-master/img/lampu_pln.jpeg')}} '); background-size: cover;background-position: center"></div>
            <div class="col-lg-7" >
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">TAMBAH PERINTAH KERJA PEMADAMAN</h1>
                </div>
                <form class="user" action="{{url('/padam/PK_STORE' )}}" method="POST">
                @csrf                    
              <!--     <div class="form-group row">
                    <div class="col-sm-2" style="margin-top: 13px;color: #000"  >
                      Awal :
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="time" required class="form-control form-control-user" name="awal_padam" id="exampleFirstName" placeholder="Awal Padam">
                    </div>
                    <div class="col-sm-2" style="margin-top: 13px;color: #000">
                      Akhir :
                    </div>
                    <div class="col-sm-4">
                      <input type="time" required class="form-control form-control-user"name="akhir_padam" id="exampleLastName" placeholder="Akhir Padam" >
                    </div>
                  </div> -->
                  <div class="form-group">
                    <input type="date" required class="form-control form-control-user"name="tanggal_pk" id="exampleInputEmail" placeholder="Tanggal Pemadaman" min="<?php echo date('Y-m-d'); ?>">
                  </div>
                 <!--  <div class="form-group">
                     <select class="custom-select  form-control"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " required  name="penyulang">
                    <option disabled selected value="">-Penyulang-</option>                  

                        <option value="kesilir">kesilir </option>
                        <option value="dasri"> dasri</option>
                        <option value="purwoharjo"> purwoharjo</option>
                        <option value="jajag">jajag </option>
                        <option value="bsi1">bsi 1 </option>
                        <option value="bsi2">bsi 2 </option>
                        <option value="blokagung"> blokagung</option>

                      </select>    
                  </div> -->
               <!--    <div class="form-group">
                    <select class="custom-select"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; "  required name="id_trafo">
                      <option disabled selected value="">-Wilayah Padam-</option>
                      @foreach($data_trafo as $mat)
                      <option value="{{$mat->id}}">{{ $mat->kode_trafo }} - {{ $mat->alamat }} </option>
                      @endforeach
                    </select> -->

                    <!--  <input type="text" class="form-control form-control-user"name="id_trafo" id="exampleInputEmail" placeholder="Wilayah Pemadaman"> -->
                  <!-- </div> -->
<!-- 
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">

                     <select class="custom-select  form-control"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " required  name="nama_petugas">
                        <option disabled selected value="">- Petugas -</option>
                        @foreach($pet as $nam_pet)
                      
                  <option value="{{ $nam_pet->name }}">{{ $nam_pet->name }}</option>
                      @endforeach

                    </select>    
                  </div> -->
                 <!--  <div class="col-sm-6"> -->
                 <!-- <input type="text" class="form-control form-control-user"name="tim" id="exampleLastName" placeholder="Tim"> -->
                       <!-- <select class="custom-select form-control"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " required  name="tim">
                      <option disabled selected value="">- TIM -</option>                  

                        <option value="prefentif11">prefentif 11 </option>
                  <option value="prefentif12"> prefentif 12</option>
                  <option value="jajag6"> jajag 6</option>
                  <option value="jajag7">jajag 7 </option>
                  <option value="inspeksi1">inspeksi 1 </option>
                  <option value="inspeksi2">inspeksi 2 </option>
                  <option value="kesilir6"> kesilir 6</option>

                      </select>    

                  </div>
                </div> -->
                <div class="form-group">
                  <input type="text required" class="form-control form-control-user"name="nomor_pk" id="exampleInputEmail" placeholder="Nomor Perintah Kerja">
                </div>
                  <div class="form-group">
                  <select class="custom-select  form-control"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " required  name="nama_petugas">
                        <option disabled selected value="">- Petugas -</option>
                        @foreach($pet as $nam_pet)
                      
                  <option value="{{ $nam_pet->name }}">{{ $nam_pet->name }}</option>
                      @endforeach

                    </select>    
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