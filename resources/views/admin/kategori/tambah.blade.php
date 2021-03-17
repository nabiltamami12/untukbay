@extends('admin.admin')
    @section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Create New Kategory
                </div>
                    <div class="panel-body">
                        @if($errors->any())
                            <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}
                                </li>
                            @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/kategori', 'class' => 'form-horizontal', 'files' => true]) !!}
                             @include ('admin.kategori.form')
                        {!! Form::close() !!}

                    </div>
            </div>
    @endsection