<?php
      $title = 'Ubah Daftar Peminjaman Material';?>
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
         @foreach ($nama_material as  $value)
            var datane =  {!! $value->id !!};
            var jumlahe =  {!! $value->stok !!};
        
            if (sel.value == datane ) {
            
           cek = jumlahe;
           } 
         @endforeach

         if (cek!='') {
            $("input[type='number']").attr('value',  cek  );
             $("input[type='number']").attr('max',  cek  );
         }
   else { 
         
             $("input[type='number']").attr('oninvalid',  "this.setCustomValidity('Jumlah Tidak Boleh Melebihi Stok')"  );

             
           }
       }
     </script>
  
     <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block " style="background-image: url('{{ asset('startbootstrap-sb-admin-2-master/img/lampu_pln.jpeg')}} '); background-size: cover;background-position: left"></div>
            <div class="col-lg-7" >
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">UBAH DAFTAR PINJAM MATERIAL</h1>
                </div>
                <form class="user" action="{{url('/pinjam_material/update',$id_peminjaman->id )}}" method="POST">
                @csrf                    
                    
                  <!--   <div class="form-group">
                      <input type="date" value="{{$id_peminjaman->tanggal}}" required class="form-control form-control-user"name="tanggal" id="exampleInputEmail" placeholder="Tanggal Peminjaman" min="<?php echo date('Y-m-d'); ?>">
                    </div>
 -->
                    <div class="form-group">
                     <select id="my-dropdown" value="{{$id_peminjaman->id_material}}" required class="custom-select" style="height: calc(1.5em + .75rem + 2px); border-radius: 10rem;    font-size: .8rem; " name="id_material" onchange="getval(this);"  >
                      <option>-</option>
                      @foreach($nama_material as $material)
                      <option  value="{{$material->id}}" > {{$material->id}} - {{$material->nama_material}} <?echo '&nbsp;&nbsp;&nbsp;&nbsp;'?>
                      (stok   <?echo '&nbsp;&nbsp;&nbsp;&nbsp;'?> {{$material->stok}} )
                    </option>
                    @endforeach

                  </select>         

                </div>
                <div class="form-group">
                  <input type="number" value="{{$id_peminjaman->jumlah}}" required class="form-control form-control-user"name="jumlah" id="exampleInputEmail" placeholder="Jumlah" >
                </div>
     <div class="form-group">
                     <select id="my-dropdown" required class="custom-select" style="height: calc(1.5em + .75rem + 2px); border-radius: 10rem;    font-size: .8rem; " name="status"  >
                      <option value="pinjam"> PINJAM </option>
                      <option  value="kembali" > KEMBALI </option>
                    </option>
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