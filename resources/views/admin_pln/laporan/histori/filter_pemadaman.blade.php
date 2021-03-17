       <?php
       $title = 'Laporan Pemadaman';?>
       <title>
         <?php echo $title;?>
       </title>
       @extends('layouts/app')
       @section('content')
       <!-- Begin Page Content -->
       <div class="container-fluid">

        <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">LAPORAN PEMADAMAN</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr style="text-align: center;">
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Kode Trafo</th>
                        <th>Alamat</th>
                        <th>Penyulang</th>
                        <th>Tim</th>
                        <th colspan="2">Pekerjaan</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      </tr>
                    </tfoot>
                    <tbody >
                     <tr>
                      <?php $number=1;?>
                      @foreach($pemadaman_admin as $mat)
                      
                      <td>{{ $number}}</td>
                      <td>{{ $mat->nomor_pk}}</td>
                      <td>{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}}</td>
                      <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
                      
                      <td>{{ $mat->penyulang }} </td>     
                      <td>{{ $mat->kode_trafo }} - {{ $mat->alamat }}</td>

                      <td>{{ $mat->tim }} </td>
                      <td>{{ $mat->nama_petugas }} </td>

                      <td>
                        {{ $mat->deskripsi_pekerjaan }}

                      </td>
                      <td>

                      </td>


                    </tr>
                    <?php $number++;?> @endforeach 

           <!--  <form action="{{route('laporan_pamadaman.filter')}}" method="get">
             <span >Priode: </span>
             <input style="margin-right: 10px "   type="date" name="tanggal_mulai" max="<?php echo date('Y-m-d'); ?>">
             <span >Sampai: </span>
             <input type="date"   name="tanggal_akhir" max="<?php echo date('Y-m-d'); ?>">

             <button style="text-align: left; padding-bottom:  20px; background: none; width: 40px;height: 40px; outline: none; border: none;" type="submit">
               <i  class="fa fa-filter  fa-lg "></i>
             </button>

           </form> -->
           <form action="{{route('laporan_pamadaman.filter')}}" method="get">
            <div >

              <label>Pilihan</label>
              <select  style="margin-left: 5em" name="filter" id="list1s" onchange="showDiv(this)">
                <option value="1" selected> Nama Petugas</option>
                <option value="2"> Nomor PK</option>
                <option value="3"> Wilayah </option>
                <option value="5"> Trafo</option>
                <option value="4"> Jadwal Pemadaman</option>
              </select>

            </div>
            <div  id="select_petugas" >

              <label>Petugas</label>
              <select  style="margin-left: 4.2em;padding-right:3.1em" name="petugas" id="list1s" onchange="displayVals(this.value)">
                <option value=""></option>
                @foreach($pemadaman_admin as $mat)
                <option value="{{$mat->nama_petugas}}">{{\Illuminate\Support\Str::limit($mat->nama_petugas, 10, $end='...') }}</option>
                @endforeach

              </select>
            </div>
            <div  id="select_pk" style="display: none;">

              <label>Nomor PK</label>

              <select  style="margin-left: 3.6em;padding-right:4.2em" name="nomor_pk" id="list1s" onchange="displayVals(this.value)">
                <option value=""></option>
                @foreach($pemadaman_admin as $mat)
                <option value="{{$mat->nomor_pk}}">{{\Illuminate\Support\Str::limit($mat->nomor_pk, 10, $end='...') }}</option>
                @endforeach

              </select>

            </div>
            <div  id="kode_trafo" style="display: none;">

              <label>Trafo</label>

              <select  style="margin-left: 5.6em;padding-right:6.1em" name="kode_trafo" id="list1s" onchange="displayVals(this.value)">
                <option value=""></option>
                @foreach($pemadaman_admin as $mat)
                <option value="{{$mat->kode_trafo}}">{{\Illuminate\Support\Str::limit($mat->kode_trafo, 10, $end='...') }}</option>
                @endforeach

              </select>

            </div>
            <div  id="wilayah" style="display: none;">

              <label>Wilayah</label>

              <select  style="margin-left: 4.4em;padding-right:2.1em" name="alamat" id="list1s" onchange="displayVals(this.value)">
                <option value=""></option>
                @foreach($pemadaman_admin as $mat)
                <option value="{{$mat->alamat}}">{{\Illuminate\Support\Str::limit($mat->alamat, 10, $end='...') }}</option>
                @endforeach

              </select>

            </div>
            <div  id="select_tanggal" style="display: none;">

              <span >Priode </span>
              <input style="margin-left: 5.2em; padding-right:0.5em ;margin-right: 2em " type="date" name="tanggal_mulai" max="<?php echo date('Y-m-d'); ?>">
              <span >Sampai </span>
              <input type="date" name="tanggal_akhir" max="<?php echo date('Y-m-d'); ?>">
            </div>
            <button style="text-align: left;margin-right: -30em background: none; width: 2em;height: 2em; outline: none; border: none;" type="submit">
             <i  class="fa fa-filter  fa-lg "></i>
           </button>
         </form>

         <script type="text/javascript">

          function showDiv(element)
          {
            document.getElementById('select_petugas').style.display = element.value == 1 ? 'block' : 'none';
            document.getElementById('select_pk').style.display = element.value == 2 ? 'block' : 'none';
            document.getElementById('wilayah').style.display = element.value == 3 ? 'block' : 'none';
            document.getElementById('select_tanggal').style.display = element.value == 4 ? 'block' : 'none';
             document.getElementById('kode_trafo').style.display = element.value == 5 ? 'block' : 'none';
          }

        </script>   


        @if (session('alert'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
        </div>
        @endif

      </tbody>
    </table>
  </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




@endsection