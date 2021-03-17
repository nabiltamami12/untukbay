@extends('admin.admin')
@section('content')
<div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>ID</th><th> Name </th><th> Icon </th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                    	<td></td>
                    	<td></td>
                       <td></td>
                       
                        <td>
                            <a href="
                         #

                            	" class="btn btn-primary btn-xs" title="Edit Kategory"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                            {!! Form::open([
                                'method'=>'DELETE',
                                'url' => ['/kategory'],
                                'style' => 'display:inline'
                                ]) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Kategory" />', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Kategory',
                                'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                     
                    </tbody>
                </table>
                <div class="pagination-wrapper">  </div>
            </div>

        </div>
    </div>
@endsection