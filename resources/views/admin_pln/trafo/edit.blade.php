      @extends('layouts.app')
      @section('content')
       <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
       </a> -->

       <?php
       $title = 'Ubah Data Trafo';?>
       <title>
         <?php echo $title;?>
       </title>
       <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              @if (session('alert'))
              <br>
              <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ session('alert') }}</strong>
              </div>

              @else
              @endif
              <div class="col-lg-5 d-none d-lg-block " style="background-image: url('{{ asset('startbootstrap-sb-admin-2-master/img/lampu_pln.jpeg')}} '); background-size: cover;background-position: left"></div>
              <div class="col-lg-7" >
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">UBAH TRAFO</h1>
                  </div>
                  <form class="user" action="{{url('/trafo/update',$trafo->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf                  

                    <div class="form-group">
                      <!-- <div class="col-sm-6 mb-3 mb-sm-0"> -->
                        <input type="text" value="{{$trafo->kode_trafo}}" class="form-control form-control-user" name="kode_trafo" required id="exampleFirstName" placeholder="Kode Trafo">
                      <!-- </div> -->
                      <!-- <div class="col-sm-6"> -->
                        <!-- <input type="text" value="{{$trafo->seksen}}" class="form-control form-control-user"name="seksen" required id="exampleLastName" placeholder="Seksen"> -->
                      <!-- </div> -->
                    </div>
                    <div class="form-group">
                       <select class="custom-select form-control"  style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " required  name="seksen">
                        <option disabled selected value=""> Seksen </option>                   
                  <option value="KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)"> KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA) </option>
                  <option value="KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (>160 kVA)"> KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (>160 kVA) </option>
                    </select>
                      </div>
                    <div class="form-group">
                      <input type="date" value="{{$trafo->tanggal_pemasangan}}" class="form-control form-control-user" name="tanggal_pemasangan" required id="exampleInputEmail" placeholder="Tanggal Pemasangan">
                    </div>
                    <div class="form-group">
                      <input type="text" value="{{$trafo->alamat}}" class="form-control form-control-user"name="alamat" required id="exampleInputEmail" placeholder="Alamat">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" value="{{$trafo->latitude}}" class="form-control form-control-user"name="latitude" required id="exampleFirstName" placeholder="Latitude">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" value="{{$trafo->longitude}}" class="form-control form-control-user"name="longitude" required id="exampleLastName" placeholder="Longitude">
                      </div>

                    </div>
                 <!--    <div class="form-group">
                    
                        <input type="text" value="{{$trafo->status}}" class="form-control form-control-user"name="status" required id="exampleFirstName" placeholder="Status">
                      </div> -->
                      <div class="form-group">
                        <label for="file-upload" class="custom-file-upload">
                         <i class="fas fa-images"></i>

                       </label>
                       <input required id="file-upload" name="image" type="file" style="display: none;" />
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
    <style type="text/css">
      .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        border-radius: 20%;
        background-color: #0094aa;

      }
    </style>
    @endsection