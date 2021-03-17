<?php      $title = 'Kelola Akun Petugas';?>
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
              <h6 class="m-0 font-weight-bold text-primary">KELOLA AKUN PETUGAS</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th colspan="2"> Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    
                  </tfoot>
                  <tbody>
                    <tr>
                    <?php $number=1;?>

                          @foreach($pet as $mat)
                             @if($mat->role!='admin')
                          
                    <td style="text-align: center;">{{ $number }}</td>
                    <td style="text-align: center;">{{ $mat->username }}</td>
                    <td style="text-align: center;">{{ $mat->name }}</td>
                    <td style="text-align: center;">************</td>
              <td class="project-actions text-center">

                     <a style=" color: #00bcd4; padding: 0px; margin-top: 5px; background: none;"   href="{{url('/akun/edit', $mat->id )}}">
                      <i class="fas fa-edit"></i>
                    </a>
                  </td>

                  <td>
                    <form action="{{url('/akun', $mat->id )}}" method="get">
                    {{-- @csrf
                    @method('DELETE') --}}
                    {{ csrf_field() }}
                    {{  method_field('DELETE') }}
                    <center> <button style="color: red; padding: 0px;border: none; background: none" type="submit">
                  <i class="fas fa-trash"></i>
                    </button> </center>
                    </form>
                  
                </td>

              
</tr>
              <?php $number++;?>     @else
                    @endif       @endforeach

           @if (session('alert'))
     <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
      </div>
@endif
<a href="{{url('/akun/create')}}" style="color: #183153;" ><i  class="fa fa-plus  fa-lg "></i>
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