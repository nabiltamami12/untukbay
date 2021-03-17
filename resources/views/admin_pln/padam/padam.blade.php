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
              <h6 class="m-0 font-weight-bold text-primary">JADWAL PEMADAMAN</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" height="50%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th colspan="2">Perintah Kerja</th>
                      <th colspan="2">Tanggal</th>
                      <th>Waktu</th>
                      <th>Penyulang</th>
                      <th>Wilayah</th>
                      <th>Tim</th>
                      <th>Penanggungjawab</th>
                      <th>Pekerjaan</th>
                      <th>Status</th>
                      <th colspan="2"> Action</th>
                     
                    </tr>

                  </thead>
                  <tfoot>
                    <tr>
                    
                  </tfoot>
                  <tbody>
                    <tr>
                
                  <?php $number=1;?>
                  @if(Auth::user()->role=='admin')
                  @foreach($pemadaman_admin as $mat)
                  <td>{{ $number }}</td>
                  <td colspan="2">{{ $mat->nomor_pk}}</td>
                  <td colspan="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}}</td>
                  <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
                  <td>{{ $mat->penyulang }}</td>
                  <td>{{ $mat->kode_trafo }} - {{ $mat->alamat }}</td>
                  <td>{{ $mat->tim }}</td>
                  <td style="text-align: center;">{{ $mat->nama_petugas }}</td>
                  <td >{{ $mat->deskripsi_pekerjaan }}</td>
                  @if($mat->status == 'Selesai Dikerjakan')
                  <td style="text-align: center;"><a href=" {{ url('padam/status', $mat->id) }}" ><i class="fas fa-check"  style="color: #0096ac;"></i></a></td>
                  @elseif($mat->status == 'Belum Dikerjakan')
                  <td style="text-align: center;"><i style="color:#00bcd4;" class="fas fa-hourglass"></i></td>
                  @else
                  <td >{{ $mat->status }}</td>
                  @endif

   <title>
Kelola Jadwal Pemadaman
                      </title>


          

                  <td class="project-actions text-center">

                    <a style=" color: #00bcd4; padding: 0px; margin-top: 5px; background: none;"   href="{{url('/padam/edit', $mat->id )}}">
                      <i class="fas fa-edit"></i>
                    </a>
                  </td>

                  <!-- <td> -->
                    <!-- <form action="{{url('/padam', $mat->id )}}" method="get">
                      {{-- @csrf
                        @method('DELETE') --}}
                        {{ csrf_field() }}
                        {{  method_field('DELETE') }}
                        <center> <button style="color: red; vertical-align: center; margin-top: 0px;padding: 0px;border: none; background: none"  type="submit">
                         <i class="fas fa-trash"></i>
                      </button> </center>
                    </form> -->
<!-- <a href=" {{ url('padam/status', $mat->id) }}" style="color:#00bcd4;"><i class="fas fa-check"  style="color: #0096ac"></i></a> -->

                  <!-- </td> -->

                </tr>    

                <?php $number++;?>@endforeach

      <!-- <form action="{{ url()->current() }}">
          <div class="col-md-11">
              <input type="text" name="keyword"  placeholder="Search users...">
          </div>
          <div class="col-md-1">
              <button type="submit" class="btn btn-primary">
                  Search
              </button>
          </div>
        </form> -->

      <!-- <div class="search-box">
        <form action="{{ url()->current() }}">
            <input class="inp-search" type="text" name="keyword" />
            <button class="btn-search" >
              <i class="fa fa-search" type="submit"></i>
            </button>
            </form>

          </div>
        -->

     <!--    @if (session('alert'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
        </div>
        @endif -->

        <a href="{{url('/padam/create')}}" style="color: #183153;" ><i  class="fa fa-plus  fa-lg "></i>
        </a>

        @else
   <title>
Info Pemadaman
     </title>

        @foreach($pemadaman_petugas as $mat)
        <td>{{ $number }}</td>
        <td colspan="2">{{ $mat->nomor_pk}}</td>
        <td colspan="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}}</td>
        <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
        <td>{{ $mat->penyulang }}</td>
        <td>{{ $mat->kode_trafo }} - {{ $mat->alamat }}</td>
        <td>{{ $mat->tim }}</td>
        <td style="text-align: center;">{{ $mat->nama_petugas }}</td>
        <td >{{ $mat->deskripsi_pekerjaan }}</td>
        <td> {{$mat->status}} </td>
         @if($mat->status == 'Belum Dikerjakan')
        <td class="project-actions text-center" >
          <a class="btn btn-info btn-sm pb1" href="{{ url('/pekerjaan/create') }}">
            Kerjakan
          </a>
        </td>
  
      @else
      <td class="project-actions text-center" >
        <!--   <a class="btn btn-success btn-sm pb1" style="pointer-events: none; 
      cursor: default;color: #fff" >
             Selesai Dikerjakan
          </a> -->
<i class="fas fa-check fa-2x" style="color: #0096ac  ;" ></i>

        </td>
      
      @endif
      </tr>    

      <?php $number++;?>@endforeach

      </div>  
      @if (session('alert'))

        <br>
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
        </div>

        @else

          @endif                         
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