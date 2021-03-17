<?php      $title = 'Kelola Data Material';?>
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
              <h6 class="m-0 font-weight-bold text-primary">KELOLA DATA MATERIAL</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nama Material</th>
                      <th>Kelompok Material</th>
                      <th>Stok</th>
                      <th colspan="2"> Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    
                  </tfoot>
                  <tbody>
                    <tr>
                       <?php $number=1;?>
                  @foreach($ori_mat as $mat)
                  <td style="text-align: center;">{{ $number}}</td>
                  <td>{{ $mat->nama_material }}</td>
                  <td>{{ $mat->kelompok_material }}</td>
                  <td>{{ $mat->stok }}</td>
                  <td class="project-actions text-center">

                    <a style="color: #00bcd4; padding: 0px; background: none"  href="{{url('/material/edit', $mat->id )}}">
                     <i class="fas fa-edit"></i>
                    </a>
                  </td>
                  <td>
                    <form action="{{url('/material', $mat->id )}}" method="get">
                      {{-- @csrf
                        @method('DELETE') --}}
                        {{ csrf_field() }}
                        {{  method_field('DELETE') }}
                        <center><button style="color: red; vertical-align: center; margin-top: 0px;padding: 0px;border: none; background: none"  type="submit">
                         <i class="fas fa-trash"></i>

                      </button> </center>
                    </form>
                  </td>
                </tr>
                <?php $number++;?>  @endforeach
                <a href="{{url('/material/create')}}" style="color: #183153;" ><i  class="fa fa-plus  fa-lg "></i>
        </a></t>
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