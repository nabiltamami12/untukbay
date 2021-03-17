       <?php
       $title = 'Laporan Peminjaman Material';?>
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
                <h6 class="m-0 font-weight-bold text-primary">LAPORAN PEMINJAMAN MATERIAL</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr style="text-align: center;">
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Tim</th>
                        <th>Nama Mateial</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <tr>
                         <?php $number=1;?>
                         @foreach($peminjaman_material as $mat)
                         <td>{{ $number}}</td>
                         <td>{{ Carbon\Carbon::parse($mat->tanggal)->translatedFormat('l, d F Y') }}</td>
                         <td>{{ $mat->tim }}</td>
                         <td>{{ $mat->nama_material }}</td>
                         <td>{{ $mat->jumlah }}</td>
                         <td>{{ $mat->status }}</td>


                       </tr>


                       <?php $number++;?> 

                       @endforeach
                       <form action="{{route('laporan_peminjaman_material.filter')}}" method="get">

                        <select name="filterTim"  class="custom-T" style="padding-left: 18px; margin-right: 10px" onchange ="getval(this);" >
                          <center>
                           <option> ALL </option>
                                            @foreach($user as $tim)
                 <option value="{{ $tim->role }}">{{$tim->role}}</option>
                 @endforeach
                         </center>
                       </select>
                       <span >Priode: </span>
                       <input style="margin-right: 10px "  type="date" name="tanggal_mulai" max="<?php echo date('Y-m-d'); ?>">
                       <span >Sampai: </span>
                       <input type="date"  name="tanggal_akhir" max="<?php echo date('Y-m-d'); ?>">

                       <button style="text-align: left; padding-bottom:  20px; background: none; width: 40px;height: 40px; outline: none; border: none;" type="submit">
                         <i  class="fa fa-filter  fa-lg "></i>
                       </button>
                     </form>

                     <form action="{{url('/laporan/peminjaman_material/cetak')}}" method="get">
                      
                      <input type="text"   name="tanggal_his_mulai" style="display: none;" value="<?php echo $tanggal_cetak_mulai?>">
                      <input type="text"   name="tanggal_his_akhir" style="display: none;" value="<?php echo $tanggal_cetak_akhir?>">
                      <input type="text" name="tim_his" style="display: none;" value="<?php echo $tim_cetak?>">
                      <button type="submit" style="color: #337ab7;margin-left: 23rem; border: none; background: none" >
                        <i  class="fa fa-download  fa-lg "></i>

                      </button>
                    </form>
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