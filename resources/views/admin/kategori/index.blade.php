@extends('admin.admin')
@section('content') 
    <div class="table-responsive">
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- <a href="{{ url('/kategori/create') }}" title="Tambah Kategori" class="btn btn-warning btn-xs">Tambah Kategori
             </a>  -->  <br/>
            <br/>
           <!--  <div class="card card-warning">
                <div class="card-header">
                  
                    <h3 class="card-title card-sm">Kategori Pemadaman</h3>
                </div>
            </div> -->
           
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-light">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> Name </th>
                            <th> Icon </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><img src="img/{{ $item->icon }}"></td>
                            <td>
                                <a href="{{ url('/kategori/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit kategori"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/kategori', $item->id],
                                    'style' => 'display:inline'
                                    ]) !!}
                                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete kategori" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete kategori',
                                    'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            <div class="pagination-wrapper"> {!! $kategori->render() !!} </div>
            </div>

        </div>
    </div>
    </div>
    @endsection