@extends('admin.admin')
    @section('content')
    <div class="table-responsive" >
    <div class="panel panel-default" >
        <div class="panel-body" >
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
                       <thead>
                        <tr >
                            <th> No </th>
                            <th> Kode Trafo </th>
                            <th> Lokasi  </th>
                            <th> Status </th>
                            <th> Deskripsi </th>
                            <th> Action </th>
                            <!-- <th> Belum Terpakai </th> -->
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($trafos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
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
                            <td>
                     <form method="get" action="/trafo/{{$item->id}}">
        {{ csrf_field() }}
        
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-data" value="Delete">
        </div>
    </form>   </td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            <div class="pagination-wrapper"> {!! $trafo->render() !!} </div>
            </div>

        </div>
    </div>
    </div>
 <script>
    $('.delete-data').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
    @endsection