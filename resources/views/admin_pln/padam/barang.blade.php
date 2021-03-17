
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    @extends('layouts/app')
@section('content')
<div class="container mt-5">
 <div class="card">
  <div class="card-header">
   Petugas :
  </div>
  <div class="card-body">
   <div class="row">
    <div class="col-md-12">
      <div class="form-group">
    <form action="{{ route('addmorePost') }}" method="POST">
        @csrf
  
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
   
        <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>Nomor Perintah Kerja</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
            <tr>  

              
          
             <td><input type="text"  name="addmore[0][nomor_pk]" value="{{$PK->nomor_pk}}" class="form-control" /></td> 
                <td><input type="text" name="addmore[0][nama_barang]" placeholder="Nama Barang" class="form-control" /></td>        
                <td><input type="number" name="addmore[0][jumlah]" placeholder="Jumlah" class="form-control" /></td>  
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
            </tr>  
        </table> 
    
        <button type="submit" class="btn btn-success">Save</button>
    </form>

</div>
   
<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr>  <td><input type="text"  name="addmore['+i+'][nomor_pk]" value="{{$PK->nomor_pk}}" class="form-control" /></td> <td><input type="text" name="addmore['+i+'][nama_barang]" placeholder="Nama Barang" class="form-control" /></td><td><input type="number" name="addmore['+i+'][jumlah]" placeholder="Jumlah" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
</table>
</body>
</html>
@endsection