<?php
      $title = 'Tambah Daftar Peminjaman Material';?>
      <title>
       <?php echo $title;?>
      </title>
      
@extends('layouts.app')
      @section('content')
       <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
       </a> -->
       @inject('status', 'App\PeminjamanMaterial')

       <script>
        function getval(sel)
        {
          var cek = '';
         @foreach ($peminjaman as  $value)
            

            var datane =  {!! $value->id_material !!};
            var jumlahe =  {!! $value->jumlah !!};
            if (sel.value == datane ) {
            
           cek = jumlahe;
 
           } 
         
         @endforeach


         if (cek!='') {

            $("input[type='number']").attr('value',  cek  );
             $("input[type='number']").attr('max',  cek  );

         }
  
       }
     </script>
     <?php
     $title = 'Kelola Jadwal Pemadaman';?>
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

        <div class="col-lg-5 d-none d-lg-block " style="background-image: url('{{ asset('startbootstrap-sb-admin-2-master/img/lampu_pln.jpeg')}} '); background-size: cover;background-position: left"></div>
        <div class="col-lg-7" >
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">TAMBAH KONDISI MATERIAL</h1>
            </div>
            <form class="user" action="{{url('/kondisi_material/store' )}}" method="POST" enctype="multipart/form-data">
              @csrf            

             <!--  <?php $hari =  date('Y-m-d');?>

              <div class="form-group">
                <input type="date" value=""  required class="form-control form-control-user"name="tanggal" id="tanggale" placeholder="Tanggal Cek" max="<?php echo $hari;?>" min="<?php echo $hari;?>">
              </div> -->
              <div class="form-group">
                <select id="my-dropdown" required class="custom-select" style="height: calc(1.5em + .75rem + 18px); border-radius: 10rem;    font-size: .8rem; " name="id_material" onchange="getval(this);"  >
                <option disabled>-</option>     
                  @foreach($material_peminjaman as $material) 
                  <option data-index="{{$material->id_material}}" value="{{$material->id_material}}" > {{$material->id}}.  {{$material->nama_material}}      PINJAM:  {{$material->jumlah}}
                  </option>
                  @endforeach
                </select>

              </div>
              <div class="form-group">
                <input type="number"  required class="form-control form-control-user"name="jumlah" id="jumlahe" placeholder="Jumlah">
              </div>
            <div class="form-group">
              <input type="text" required class="form-control form-control-user"name="keterangan" id="exampleInputEmail" placeholder="Keterangan">
            </div>

            <div class="form-group">
              <label for="file-upload" class="custom-file-upload">
               <i class="fas fa-images">  Foto Sebelum</i>

             </label>
             <input id="file-upload" title="foto sebelum" required name="image" type="file" style="display: ;" />
           </div>
                 <div class="form-group">
              <label for="file-upload" class="custom-file-upload">
               <i class="fas fa-images">  Foto Setelah</i>

             </label>
             <input id="file-upload" title="foto setelah" required name="image2" type="file" style="display: ;" />
           </div>
  @foreach($peminjaman as $mat)
               <input type="text" name="id_peminjaman" value="{{$mat->id}}" style="display: none" >
               @endforeach 
           @foreach($padam as $mat)
           <input type="text" name="id_trafo" value="{{$mat->id_trafo}}" style="display: none" >
           <input type="text" name="tim" value="{{$mat->tim}}" style="display: none" >
           <input type="text" name="id_padam" value="{{$mat->id}}" style="display: none">
           @endforeach   
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

   <script>

   </script>
    @endsection