      @extends('layouts.app')
      @section('content')
       <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
       </a> -->

       <?php
       $title = 'Kelola Jadwal Pemadaman';?>
       <title>
         <?php echo $title;?>
       </title>

       <script type="text/javascript">


         function showOverlay() {
          $('.overlay').show()
        }
        setTimeout(showOverlay, 2000)
      </script>      

      <div class="overlay">
        <strong class="card-title">Buat jadwal pemadaman</strong>
        <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card shadow mb-4">
                
            <div class="modal-body">

               <form action="{{url('/padam/store' )}}" method="POST">
               @csrf

               <div style="padding-left:  8rem" class="form-group">




                <label for="shootdate">Tanggal:</label>
                <input required   type="date" name="jadwal_padam" id="shootdate" title="Tanggal" min="<?php echo date('Y-m-d'); ?>" />
                <label style="padding-left:  30px" for="shootdate">Mulai Padam:</label>
                <input required name="awal_padam" type="time"  >
                <label style="padding-left:  30px" for="shootdate">Selesai Padam:</label>
                <input required name="akhir_padam"  type="time">
              </div>


              <div class="form-group">
                <label class="form-check-label">Penyulang</label>
                <select class="custom-select" required  name="penyulang">

                  <option value="kesilir">kesilir </option>
                  <option value="dasri"> dasri</option>
                  <option value="purwoharjo"> purwoharjo</option>
                  <option value="jajag">jajag </option>
                  <option value="bsi1">bsi 1 </option>
                  <option value="bsi2">bsi 2 </option>
                  <option value="blokagung"> blokagung</option>

                </select>    
              </div>
              <div class="form-group">
                <label class="form-check-label">Wilayah Padam</label>
                <select class="custom-select" required name="id_trafo">
                  @foreach($data_trafo as $mat)
                  <option value="{{$mat->id}}">{{ $mat->kode_trafo }} - {{ $mat->alamat }} </option>
                  @endforeach
                </select>  
              </div>
              <div class="form-group">
                <label>Tim</label>
                <select class="custom-select" required name="tim">

                  <option value="prefentif11">prefentif 11 </option>
                  <option value="prefentif12"> prefentif 12</option>
                  <option value="jajag6"> jajag 6</option>
                  <option value="jajag7">jajag 7 </option>
                  <option value="inspeksi1">inspeksi 1 </option>
                  <option value="inspeksi2">inspeksi 2 </option>
                  <option value="kesilir6"> kesilir 6</option>

                </select>    
              </div>
              <div class="form-group">
                <label  class="form-check-label">Pekerjaan</label>
                <input type="text" class="form-control" required name="deskripsi_pekerjaan" placeholder="">
              </div>
        
               <!--  <a href="{{ url('padam') }}">  <button   type="button" class="btn btn-primary btn-sm mt-3 rounded" data-dismiss="modal">close</button></a> -->
                <button type="submit" class="btn btn-primary btn-sm mt-3 rounded">save</button>
              </div>
                 @foreach($pemadaman_petugas as $mat)
                                <input type="text" name="id_trafo" value="{{$mat->id_trafo}}" style="display: none">
                                @endforeach
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- </div> -->

      @endsection