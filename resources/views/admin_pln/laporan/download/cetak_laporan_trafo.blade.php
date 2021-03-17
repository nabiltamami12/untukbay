
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
        <td align="right"><img src="{{asset('logo_pln.png')}}" alt="" width="150"/></td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td style="text-transform: uppercase;"><center><strong>Laporan Histori Trafo </strong></center></td>
    </tr>

  </table>

  <br/>

  <table width="100%" style="text-transform: uppercase;">
    <thead style="background-color: lightgray;">
      <tr>
       <th>No</th>
        <th>Tanggal</th>
        <th>Trafo</th>
        <th>Nama Material</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
       <?php $number=1;?>
      @foreach($histori as $mat)
      <tr>
        
        <td>{{ $number}}</td>
        <td>{{ $mat->tanggal }}</td>
        <td>{{ $mat->kode_trafo }} - {{ $mat->alamat}}</td>
        <td>{{ $mat->nama_material }} </td>
        <td>{{ $mat->jumlah }}</td>
        <td>{{ $mat->status }}</td>
        <td>{{ $mat->keterangan }}</td>
        
      </tr>
      <?php $number++;?> @endforeach
    </tbody>

   
  </table>
  <br><br><br>
<footer><center><span>PT. PLN PERSERO ULP JAJAG BANYUWANGI</span></center></footer>
</body>
</html>