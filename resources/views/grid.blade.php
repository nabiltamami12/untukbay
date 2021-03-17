@extends('layouts/app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>
    <!-- <link rel="stylesheet" href="custom.css"> -->
</head>
<style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
 
body
{
    background-color: black;
}
 
.badan
{
    float: left;
    width: 670px;
    margin: 5px auto;
    background-color: none;
    padding: 20px;
    overflow: hidden;
}
 
.badan h2
{
    color: crimson;
    border-bottom: 1px solid gainsboro;
    margin: 5px;
    margin-bottom: 13px;
}
 
.list-produk
{
    border: 1px solid gainsboro;
    padding: 10px;
    float: left;
    width: 200px;
    margin: 5px;
}
 
.list-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px rgb(4 129 148);
}
 
.list-produk img
{
    width: 100%;
    height: 175px;
    display: block;
    margin-bottom: 5px;
}
 
.list-produk h4, .list-produk h5
{
    color: white;
    text-align: center;
    margin-bottom: 5px;
}
 
.tombol
{
    text-decoration: none;
    border-radius: 7px;
    padding: 7px;
    display: block;
    float: left;
    width: 45%;
    margin: 4px;
    text-align: center;
    color: white;
}
 
.tombol:hover
{
    background-color: none;
    transition-duration: 700ms;
}
 
.tombol-detail
{
    background-color: green;
}
 
.tombol-beli
{
    background-color: crimson;
}
</style>
<!-- @inject('trafo','App\Trafo') -->
<body>
<div class="row">
     
    <div class="badan">
        @foreach($pemadaman_trafo as $t)

        <div class="list-produk">
            <img src="{{ asset('gambar_trafo/'.$t->gambar.'') }}" alt="Trafo">
            <h4>{{ $t->kode_trafo }}</h4>
            <h5>{{ \Illuminate\Support\Str::limit($t->alamat, 10, $end='...') }}</h5>

  <input id="myInput"  type="button" data-name="{{ $t->kode_trafo }}" data-id="{{ $t->id }}" value="{{ $t->kode_trafo }}" onclick="addRow(this)" style="background-color: #009fb7; color:white;margin-left: 5em;border:none;padding: 0.7em">
            <!-- <a  id="{{ $t->kode_trafo }}"  class="tombol tombol-beli"  style="margin-left: 3em;">Tambah</a> -->
        </div>
        @endforeach

    </div>
     <div class="col-xl-3 col-lg-4" style="padding-right: 5em;padding-top: 2.5em;">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Trafo</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body" id="data" style="min-width:100px; display: inline-block">
      </div>
       <input id="myData"  type="button" style="background-color: #009fb7; color:white;border-radius:.35rem;border:none;padding: 0.7em" value="TAMBAH" onclick="addData(this)">
    </div>
  </div>
</div>
<div style="padding-left: 80px">
      {!! $pemadaman_trafo->render() !!}
    
</div>
 
</body>
</html>
<script type="text/javascript">
 function addRow(ele) 
{

    var name= $(ele).attr('data-name');
    var id= $(ele).attr('data-id');
    

   document.getElementById('data').innerHTML += name + "<br>";
 
}


function addData(ele) {
    var elements = [];
    elements[0] =  document.getElementById('data').innerHTML.split('<br>');

alert(elements[0]);
}
</script>
  @endsection
