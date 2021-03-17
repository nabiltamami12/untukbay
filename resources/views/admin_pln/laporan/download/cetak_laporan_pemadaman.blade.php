<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PT. PLN Persero</title>
  <link rel="icon" type="image/jpg" href="{{ ('Logo-PLN-Terbaru.jpg') }} ">
  <style type="text/css">
    * {
      font-family: Verdana, Arial, sans-serif;
    }
    table{
      font-size: x-small;
    }
    tfoot tr td{
      font-weight: bold;
      font-size: x-small;
    }
    .gray {
      background-color: lightgray
    }
    pre {
      text-align: left;
      white-space: pre-line;
    }
  </style>

</head>
<body>

  <table width="100%">
    <tr>

      <td align="left">
        <h3>PT. PLN Persero</h3>
        <pre>
          Jl. Ahmad Yani No.47, Dusun Petahunan, Jajag<br>
          Kec. Gambiran, Kabupaten Banyuwangi<br>
          Jawa Timur<br>
        </pre>
      </td>
      <td align="right"><img src="{{ ('logo_pln.png') }}" alt="" width="150"/></td>
    </tr>

  </table>

  <table width="100%">
    <tr>
      <td style="text-transform: uppercase;"><center><strong>Laporan Pemadaman <br> {{Carbon\Carbon::parse($dari)->translatedFormat('d F Y')}} - {{Carbon\Carbon::parse($hingga)->translatedFormat('d F Y')}} </strong></center></td>
    </tr>

  </table>

  <br/>

  <table width="100%" style="text-transform: uppercase;">
    <thead style="background-color: lightgray;">
      <tr>
       <th>No</th>
       <th >Perintah Kerja</th>
       <th  >Tanggal</th>
       <th>Waktu</th>
       <th>Penyulang</th>
       <th >Wilayah</th>
       <th>Tim</th>
       <th>Penanggungjawab</th>
       <th>Pekerjaan</th>





     </tr>
   </thead>
   <tbody>
     <?php $number=1;?>
     @foreach($data as $mat)
     <tr>

      <td>{{ $number}}</td>
                      <td>{{ $mat->nomor_pk}}</td>
                      <td>{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}}</td>
                      <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
                      
                      <td>{{ $mat->penyulang }} </td>     
                      <td>{{ $mat->kode_trafo }} - {{ $mat->alamat }}</td>

                      <td>{{ $mat->tim }} </td>
                      <td>{{ $mat->nama_petugas }} </td>

                      <td>
                        {{ $mat->deskripsi_pekerjaan }}

                      </td>
             

     </tr>

     <?php $number++;?> @endforeach
   </tbody>

   
 </table>
 <br><br><br>
 <footer><center><span>PT. PLN PERSERO ULP JAJAG BANYUWANGI</span></center></footer>
</body>
</html>