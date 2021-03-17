@extends('layouts.app')
       @section('content')
 <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
            </a> -->
                <?php
$title = 'Riwayat Kondisi Trafo';?>
 <title>
   <?php echo $title;?>
  </title>  
     <script type="text/javascript">
   

         function showOverlay() {
  $('.overlay').show()
}
setTimeout(showOverlay, 2000)
     </script>     
     
<html>
<div class="overlay">
<!-- <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->

 
   <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">LAPORAN HISTORI TRAFO</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr style="text-align: center;">
                        <th>NO</th>
                        <th>Tanggal</th>
                       <th>Trafo</th>
                      <th>Nama Mateial</th>
                      <th colspan="2">Jumlah</th>
                      <th>Status</th>
                     <th>Keterangan</th>
                   </tr>
                 </thead>
                 <tfoot>
                  <tr>
                  </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                            <?php $number=1;?>
                          @foreach($histori as $mat)
                    <td>{{ $number}}</td>
                    <td>{{ $mat->tanggal }}</td>
                    <td>{{ $mat->trafo_cek->kode_trafo }} - {{ $mat->trafo_cek->alamat}}</td>
                    <td>{{ $mat->material_cek->nama_material }} </td>
                    <td>{{ $mat->jumlah }}</td>
                    <td>{{ $mat->status }}</td>
                    <td>{{ $mat->keterangan }}</td>
                    <td class="project-actions text-center">

                   
                  </td>
                  
                  <td>
                  
                </td>
</tr>
                      <?php $number++;?> @endforeach
                   <!--  <a href="#" class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModal">add</a>
                    <a href="#download" class="btn btn-info material-icons" data-toggle="modal" data-target="#download" >download</a> -->
          
                      </tbody>
                            
                    </table>
                  </div>
                       
            <div class="modal-footer">
               <a href="{{url('/trafo/histori/cetak', $sta_tra )}}" class="btn btn-success material-icons">unduh
            </a>
            <a href="{{ url('trafo') }}"            
                type="button" class="btn btn-danger" data-dismiss="modal">tutup</a>

         <!--      <button type="submit" class="btn btn-success">save</button> -->
            </div>
        
          </div>
        </div>
<!--       </div>
      </div> -->
    <!-- </div> -->

  </html>
              @endsection