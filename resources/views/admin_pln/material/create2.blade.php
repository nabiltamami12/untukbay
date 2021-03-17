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
        <strong class="card-title">Tambah Stok Trafo</strong>
        <div class="content mt-3">
          <div class="animated fadeIn">
            <div class="card shadow mb-4">

              <div class="modal-body">
               <form action="{{url('/material/store' )}}" method="POST">
                @csrf
                 <div class="form-group">
                  <label>nama material</label>
                  <input type="text" class="form-control" name="nama_material" placeholder="">
                </div>
                <div class="form-group">
                  <label>kelompok material</label>
                  <input type="text" class="form-control" name="kelompok_material" placeholder="">
                </div>
                <div class="form-group">
                  <label>seksen  
                  </label>
                  <br>
                  (*PILIH 1 UNTUK KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)
                  <br> (*PILIH 2 UNTUK KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 2...)
                  <br>
                  <input type="number" min="1" max="2" class="form-control" name="seksen" placeholder="">
                </div>
                <div class="form-group">
                  <label>stok</label>
                  <input type="text" class="form-control" name="stok" placeholder="">
                </div>

                <!--  <a href="{{ url('padam') }}">  <button   type="button" class="btn btn-primary btn-sm mt-3 rounded" data-dismiss="modal">close</button></a> -->
                <button type="submit" class="btn btn-primary btn-sm mt-3 rounded">save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->

  @endsection