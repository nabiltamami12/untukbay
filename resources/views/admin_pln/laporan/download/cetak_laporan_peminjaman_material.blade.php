<!-- <!DOCTYPE html>
<html>
<head>
  <title>Laporan Trafo ULP JAJAG</title>
 <link rel="icon" type="image/jpg" href="{{ asset('/startbootstrap-sb-admin-2-master/img/Logo-PLN-Terbaru.jpg') }} ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <style type="text/css">

    font-size: 11pt;
    font-family :"MyriadPro-light";
    
  </style>
  <center>
    <h5>Laporan Trafo ULP JAJAG</h5>
    <h6>PT. PLN Persero</h6>
  </center>
  
  <table class='table table-bordered' style="margin: 0px">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>nama</th>
        <th>Jumlah</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody style="width: 100%">
      <?php $number=1;?>
      @foreach($data as $mat)
      <tr>

       <td>{{ $number}}</td>
       <td>{{ $mat->tanggal }}</td>
       <td>{{ $mat->tim }}</td>
       <td>{{ $mat->nama_material }}</td>
       <td>{{ $mat->jumlah }}</td>
       <td>{{ $mat->status }}</td>
       
     </tr>
     <?php $number++;?> @endforeach
   </tbody>
 </table>
 
</body>
</html> -->





<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PT. PLN Persero</title>
 <link rel="icon" type="image/jpg" href="{{ asset('/startbootstrap-sb-admin-2-master/img/Logo-PLN-Terbaru.jpg') }} ">
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
      <td style="text-transform: uppercase;"><center><strong>Laporan Peminjaman Material TIM: {{$tim}} <br>{{Carbon\Carbon::parse($dari)->translatedFormat('d F Y')}} - {{Carbon\Carbon::parse($hingga)->translatedFormat('d F Y')}} </strong></center></td>
    </tr>

  </table>

  <br/>

   <table width="100%" style="text-transform: uppercase;">
    <thead style="background-color: lightgray;">
      <tr>
       <th>No</th>
        <th>Tanggal</th>
        <th>Tim</th>
        <th>nama</th>
        <th>Jumlah</th>
        <th>Status</th>
     </tr>
   </thead>
   <tbody>
     <?php $number=1;?>
     @foreach($data as $mat)
     <tr>


       <td>{{ $number}}</td>
       <td>{{Carbon\Carbon::parse($mat->tanggal)->translatedFormat('l, d F Y')}}</td>
       <td>{{ $mat->tim }}</td>
       <td>{{ $mat->nama_material }}</td>
       <td>{{ $mat->jumlah }}</td>
       <td>{{ $mat->status }}</td>

     </tr>

     <?php $number++;?> @endforeach
   </tbody>

   
 </table>
 <br><br><br>
 <footer><center><span>PT. PLN PERSERO ULP JAJAG BANYUWANGI</span></center></footer>
</body>
</html>