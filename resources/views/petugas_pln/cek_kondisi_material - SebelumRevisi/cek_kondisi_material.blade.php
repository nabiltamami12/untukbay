<?php
      $title = 'Cek Kondisi Material';?>
      <title>
       <?php echo $title;?>
      </title>
@extends('layouts/app')
@section('content')

           

<!-- Begin Page Content -->
<div class="container-fluid">
     @if (session('alert'))
    <div class="alert" role="alert" id="myAlert">
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">SUCCESS</span> {{ session('alert') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
  <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">KONDISI MATERIAL</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr style="text-align: center;">
                        <th>NO</th>
                      <th>Tanggal</th>
                     <th>Nama Mateial</th>
                    <th>Jumlah</th>
                    <th>Foto Sebelum Diganti</th>
                    <th>Foto Setelah Diganti</th>
                    <th>Keterangan</th>
                    <th colspan="2">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>

                  </tfoot>
                  <tbody>
                    <tr>
                     <?php $number=1;?>
                @foreach($kebutuhan_material as $mat)
                <td>{{ $number}}</td>
                <td>{{ Carbon\Carbon::parse($mat->tanggal)->translatedFormat('l, d F Y') }}</td>
                <td>{{ $mat->material_cek->nama_material }}</td>
                <td>{{ $mat->jumlah }}</td>
                <td>
                 <img height ="50" src="{{ asset('cek_kondisi_trafo_sebelum/'.$mat->foto_sebelum.'') }}"  > 
               </td>
                <td>
                 <img height ="50" src="{{ asset('cek_kondisi_trafo_setelah/'.$mat->foto_setelah.'') }}"  > 
               </td>
               <td>{{ $mat->keterangan }}</td>

   <td class="project-actions text-center">

                        <a style=" color: #00bcd4; padding: 0px; margin-top: 5px; background: none;" href="{{url('/kondisi_material/edit', $mat->id )}}">
                          <i class="fas fa-edit"></i>
                      
                        </a>
                      </td>
             
              <!-- <td> -->
              <!--   <form action="{{url('/kondisi_material', $mat->id )}}" method="get">
                   
                  {{-- @csrf
                    @method('DELETE') --}}
                    {{ csrf_field() }}
                    {{  method_field('DELETE') }}
                    <center> <button style="color: red; vertical-align: center; margin-top: 0px;padding: 0px;border: none; background: none"  type="submit">
                            <i class="fas fa-trash"></i></button>  </center>
                  </form> -->
                <!-- </td> -->
              </tr>
              <?php $number++;?>  @endforeach
                                            <a href="{{url('/kondisi_material/create')}}" style="color: #183153;" ><i  class="fa fa-plus  fa-lg "></i>
        </a>
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