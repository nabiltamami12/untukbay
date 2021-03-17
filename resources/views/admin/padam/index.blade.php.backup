@extends('admin.admin')
    @section('content')
   <!-- @if(Auth::user()->username=='admin') -->
    <div class="table-responsive">
        <div class="panel panel-default">
            <div class="panel-body">
          <!--   <button href="{{ url('/padam/create') }}" type="submit" class="btn btn-warning btn-s">Tambah
            </button> -->
            <br/>
            <br/>
                        <!-- <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title card-sm">Info Pemadaman</h3>
                </div>
            </div> -->
            <div class="table-responsive">
                  
        <table class="table table-bordered table-hover text-light" style=" background-color: #134A83;">
                    <!-- <thead>
                        <tr>
                            <th> Kategory Id </th>
                            <th> Title </th>
                            <th> Description </th>
                            <th>Ekstimasi</th>
                            <th>Jenis Gangguan</th>
                            <th>Petugas</th>
                            <th>Actions</th>
                        </tr>
                    </thead> -->
                    <thead >
                        <tr>
                            <th> No </th>
                            <th> Tanggal </th>
                            <th> Kode Trafo </th>
                            <th> Lokasi </th>
                            <th> Deskripsi </th>
                        </tr>
                    </thead>

                    <tbody >
                        @foreach($padam as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{$item->kode_trafo}}</td>
                            <td>{{$item->lokasi}}</td>
                            <td>{{$item->deskripsi}}</td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>

            <div class="pagination-wrapper"> {!! $padam->render() !!} </div>
            </div>

        </div>
    </div>
    </div>
<!-- @else
<div class="container" style="background-image: url('{{asset('/lte/background/admin-background.jpeg')}}'); background-size: 100%">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top: 20rem ">
       
                        <form method="POST" action="#">
                         <button type='button' class='btn btn-primary center-block'> Klik Disini</button>
                        </form>
          
            </div>
            <div class="col-md-2" style="padding-top: 20rem ">
           
                        <form method="POST" action="#">
                         <button type='button' class='btn btn-primary center-block'> Klik Disini</button>
                        </form>
            
            </div>
        </div>
    </div>     @endif -->
    @endsection