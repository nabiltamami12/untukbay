<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <style type="text/css">
          
   #issMap { height: 57rem; width : 112rem; align-content: center;}
    </style>
    <title>Halaman Awal</title>
</head>
<body>
 <div id="issMap"></div>
</body>
<script>
    
    const mymap = L.map('issMap').setView([ -8.4385879,114.1807581
], 13);
    const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributor';
   //  var polygon = L.polygon([
   //  [-8.2498082,114.3607127]
   // ]).addTo(mymap);

//                           @foreach($padamTamu as $d)
//    var circle = L.circle(['{{$d->latitude}}','{{$d->longitude}}'], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 500
// }).addTo(mymap);
//    circle.bindPopup("{{$d->deskripsi_pekerjaan}}");
// @endforeach

  

                          @foreach($padamTamu as $d)
                          @if($d->status=='Belum Dikerjakan')
L.circle(['{{$d->trafo_cek->longitude}}','{{$d->trafo_cek->latitude}}'],{
     color: 'red',
    fillColor: 'red',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap)
    .bindPopup("<table><tr><td>Tanggal Padam </td><td>: </td><td>{{$d->jadwal_padam}}</td></tr><tr><td>Waktu</td><td>:</td><td> {{ $d->awal_padam }} - {{ $d->akhir_padam }}</td></tr><tr><td>Lokasi </td><td>:</td><td>{{$d->trafo_cek->alamat}}</td></tr><tr><td>Pekerjaan</td><td>:</td><td>{{$d->deskripsi_pekerjaan}}</td><td><tr><td>Status </td><td>: </td><td>{{$d->status}}</td></tr></table>")
    .openPopup();
    @elseif($d->status=='Sedang Dikerjakan')
    L.circle(['{{$d->trafo_cek->longitude}}','{{$d->trafo_cek->latitude}}'],{
     color: 'yellow',
    fillColor: 'yellow',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap)
    .bindPopup("<table><tr><td>Tanggal Padam </td><td>: </td><td>{{$d->jadwal_padam}}</td></tr><tr><td>Waktu</td><td>:</td><td> {{ $d->awal_padam }} - {{ $d->akhir_padam }}</td></tr><tr><td>Lokasi </td><td>:</td><td>{{$d->trafo_cek->alamat}}</td></tr><tr><td>Pekerjaan</td><td>:</td><td>{{$d->deskripsi_pekerjaan}}</td><td><tr><td>Status </td><td>: </td><td>{{$d->status}}</td></tr></table>")
    .openPopup();
    @else
      L.circle(['{{$d->trafo_cek->longitude}}','{{$d->trafo_cek->latitude}}'],{
     color: 'green',
    fillColor: 'green',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap)
    .bindPopup("<table><tr><td>Tanggal Padam </td><td>: </td><td>{{$d->jadwal_padam}}</td></tr><tr><td>Waktu</td><td>:</td><td> {{ $d->awal_padam }} - {{ $d->akhir_padam }}</td></tr><tr><td>Lokasi </td><td>:</td><td>{{$d->trafo_cek->alamat}}</td></tr><tr><td>Pekerjaan</td><td>:</td><td>{{$d->deskripsi_pekerjaan}}</td><td><tr><td>Status </td><td>: </td><td>{{$d->status}}</td></tr></table>")
    .openPopup();
    @endif

@endforeach

// @foreach ($padamTamu as $d)
//     const marker = L.marker([
//       [{{ $d->latitude}},
//       {{ $d->longitude}}]
    
//       ]).addTo(mymap);
    
// @endforeach


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
</html>