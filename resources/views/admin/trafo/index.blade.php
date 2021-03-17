@extends('admin.admin')
    @section('content')
    <div class="table-responsive" >
    <div class="panel panel-default" >
        <div class="panel-body" >
            <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
            <link rel="stylesheet" href="/datatables-bs4/css/dataTables.bootstrap4.css">
           <!--  <button href="{{ url('/trafo/create') }}" type="submit" class="btn btn-warning btn-s">Tambah
            </button> -->
              <br/>
            <br/>
           <!--  <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title card-sm">Data Trafo Banyuwangi</h3>
                </div>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-light" >
                 <!--    <thead>
                        <tr >
                            <th> ID </th>
                            <th> Kode_Lokasi  </th>
                            <th> Lokasi  </th>
                            <th> Kapasitas </th>
                            <th> Terpakai </th>
                            <th> Belum Terpakai </th>
                        </tr>
                    </thead> -->
                       <thead style="text-align: center; font-style: bold;">
                        <tr >
                            <th> No </th>
                            <th> Petugas </th>
                            <th> Kode Trafo </th>
                            <th> Lokasi  </th>
                            <th> Status </th>
                            <th> Deskripsi </th>
                            <th> Terjadwal </th>
                            <th> Action </th>
                            <!-- <th> Belum Terpakai </th> -->
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($trafos as $item)
                        <tr>
                            <td style="text-align: right">{{ $item->id }}</td>
                            <td> {{ $item->name_user }} </td>
                            <td>{{ $item->kode_trafo }}</td>
                            <td>{{ $item->lokasi }}</td>
                            @if($item->status=='merah')
                            <td style="background-color: red"></td>
                            @elseif($item->status=='kuning')
                            <td style="background-color: yellow"></td>
                            @else ($item->status=='hijau')
                            <td style="background-color: green"></td>
                            @endif
                            <td>{{ $item->deskripsi }}</td>
                           @if(  $item->verifikasi=='belum terverifikasi'  )
                          <td style="background-color: red">
                             <form method="get" action="/trafo/verifikasi/{{$item->id}}">
                                    <div class="form-group">
                                        <center>
                                        <button type="submit" class="btn btn-lg btn-danger ">
                                            <span class="fa fa-times" style="font-size: 20px;"></span>
                                        </button>
                                        </center>     
                                    </div>
                                </form>   
                          </td>
                          @elseif($item->verifikasi=='terverifikasi' )
                           <td style="background-color: green"> 
                                <form method="get" action="/trafo/verifikasi/{{$item->id}}">
                                    <div class="form-group">
                                        <center>
                                        <button type="submit" class="btn btn-lg btn-success ">
                                            <span class="fa fa-check" style="font-size: 20px;"></span>
                                        </button>
                                        </center>     
                                    </div>
                                </form> </td>
                           @endif
                            <td>
                                <form method="get" action="/trafo/{{$item->id}}">

                                    <div class="form-group">
                                        <center>
                                        <button type="submit" class="btn btn-lg btn-default ">
                                            <span class="fa fa-trash" style="font-size: 20px;"></span>
                                        </button>
                                        </center>     
                                    </div>
                                </form>   
                            </td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            <div class="pagination-wrapper"> {!! $trafo->render() !!} </div>
            </div>

        </div>
    </div>
    </div>
 <!-- <script>
    $('.delete-data').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script> -->
    @endsection