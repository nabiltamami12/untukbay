@extends('layouts/app')
@section('content')
 <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
 </a> -->
 <title>
   Dashboard
 </title>

 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
 integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
 crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
 integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
 crossorigin=""></script>


<div class="row">
  <!-- Area Chart -->
  <div class="col-xl-6 col-lg-7" style="padding-left: 20px;">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" >
        <h6 class="m-0 font-weight-bold text-primary">Info Pemadaman</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body" height="285" id="issMap" style="display: block; height: 370px;">
 
      </div>
      <div class="mt-4 text-center big">
        <span class="mr-2">

          <i class="fas fa-circle text-danger"></i>     

          Belum Dikerjakan

        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-warning"></i> 
          Sedang Dikerjakan
        </span>
      </div>
    </div>

  </div>

  <div class="col-xl-6 col-lg-5" style="padding-right:20px">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Pemadaman Bulan <?php echo Carbon\Carbon::parse(date('M'))->translatedFormat('F') ?></h6>
      </div>
      <!-- Card Body -->
      <div class="card-body" id="pie_chart" style="font-size:12px; width:45em;display: block; height: 412px;">

        <!-- isi disini -->

      </div>
    </div>
  </div>

</div>




<script>     
  const mymap = L.map('issMap').setView([ -8.4385879,114.1807581
    ], 13);
  const attribution = 'Terima Kasih Untuk '+'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributor';
  @foreach($padamTamu as $d)
  @if($d->status=='Belum Dikerjakan')
  L.circle(['{{$d->longitude}}','{{$d->latitude}}'],{
   color: 'red',
   fillColor: 'red',
   fillOpacity: 0.5,
   radius: 500,
   maxWidth: 400,
   width: 200,
 }).addTo(mymap)
  .bindPopup("<table><tr><td>Tanggal Padam </td><td>: </td><td>{{Carbon\Carbon::parse($d->jadwal_padam)->translatedFormat('l, d F Y')}}</td></tr><tr><td>Waktu</td><td>:</td><td> {{ $d->awal_padam }} - {{ $d->akhir_padam }}</td></tr><tr><td>Trafo </td><td>:</td><td>{{$d->kode_trafo}}</td></tr><tr><td>Lokasi </td><td>:</td><td>{{$d->alamat}}</td></tr><tr><td>Pekerjaan</td><td>:</td><td>{{$d->deskripsi_pekerjaan}}</td><td><tr><td>Status </td><td>: </td><td>{{$d->status}}</td></tr></table>")
  .openPopup();
  @elseif($d->status=='Sedang Dikerjakan')
  L.circle(['{{$d->longitude}}','{{$d->latitude}}'],{
   color: 'yellow',
   fillColor: 'yellow',
   fillOpacity: 0.5,
   radius: 500,
   maxWidth: 400,
   width: 200,

 }).addTo(mymap)
  .bindPopup("<table><tr><td>Tanggal Padam </td><td>: </td><td>{{Carbon\Carbon::parse($d->jadwal_padam)->translatedFormat('l, d F Y')}}</td></tr><tr><td>Waktu</td><td>:</td><td> {{ $d->awal_padam }} - {{ $d->akhir_padam }}</td></tr><tr><td>Trafo </td><td>:</td><td>{{$d->kode_trafo}}</td></tr><tr><td>Lokasi </td><td>:</td><td>{{$d->alamat}}</td></tr><tr><td>Pekerjaan</td><td>:</td><td>{{$d->deskripsi_pekerjaan}}</td><td><tr><td>Status </td><td>: </td><td>{{$d->status}}</td></tr></table>")
  .openPopup();
  @else
 //  L.circle(['{{$d->longitude}}','{{$d->latitude}}'],{
 //   color: 'green',
 //   fillColor: 'green',
 //   fillOpacity: 0.5,
 //   radius: 500,
 //   maxWidth: 400,
 //   width: 200,

 // }).addTo(mymap)
 //  .bindPopup("<table><tr><td>Tanggal Padam </td><td>: </td><td>{{$d->jadwal_padam}}</td></tr><tr><td>Waktu</td><td>:</td><td> {{ $d->awal_padam }} - {{ $d->akhir_padam }}</td></tr><tr><td>Lokasi </td><td>:</td><td>{{$d->alamat}}</td></tr><tr><td>Pekerjaan</td><td>:</td><td>{{$d->deskripsi_pekerjaan}}</td><td><tr><td>Status </td><td>: </td><td>{{$d->status}}</td></tr></table>")
 //  .openPopup();
  @endif

  @endforeach

  const api_url = 'https://nominatim.openstreetmap.org/details.php?place_id=236525347'
  const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
  const tiles = L.tileLayer(tileUrl,{ attribution });
  tiles.addTo(mymap);
  async function getISS(){
    const response = await fetch(api_url);
    const data = await response.json();
    const { latitude, longitude } = data;

    document.getElementById('lat').textContent = latitude;
    document.getElementById('lan').textContent = longitude;
  }
</script>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

<script type="text/javascript">
 var analytics = <?php echo $jadwal_padam; ?>

 google.charts.load('current', {'packages':['corechart']});

 google.charts.setOnLoadCallback(drawChart);

 function drawChart()
 {
  var data = google.visualization.arrayToDataTable(analytics);
  var options = {
   title : 'Pesentase Pemadaman'
 };
 var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
 chart.draw(data , options);

}
</script>
@endsection