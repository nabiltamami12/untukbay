<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PT. PLN Persero</title>
 <link rel="icon" type="image/jpg" href="{{ ('/startbootstrap-sb-admin-2-master/img/Logo-PLN-Terbaru.jpg') }} ">
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
       <!--  -->
    </tr>

  </table>

  <br/>

    <table width="100%" style="text-transform: uppercase;">
    <thead style="background-color: lightgray;">
      <tr>
        <th>No</th>
                        <th>Nomor Perintah Kerja</th>
                        <th>Tanggal Perintah Kerja</th>
                        <th>Penanggungjawab</th>
                        <th>Nama Barang</th>
                        <th colspan="2">Penggunaan Material</th>
                        <th>Foto Sebelum</th>
                        <th>Foto Sesudah</th>
      </tr>
    </thead>
    <tbody>
       <?php $number=1;?>
        @foreach($lap as $mat)
        <tr>
          
        <td>{{ $number}}</td>
                        <td>{{ $mat->nomor_pk }}</td>
                        <td>{{ Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y') }}</td>
                        <td>{{ $mat->nama_petugas }}</td>
                        <td>{{ $mat->nama_barang }}</td>
                        <td colspan="2">{{ $mat->jumlah }} buah</td>
                        <td>  <center><img src="{{ asset('cek_kondisi_trafo_sebelum/'.$mat->fotoSebelum.'') }}" style="max-height: 3rem;"> <br>
                        </center></td>
                        <td>  <center><img src="{{ asset('cek_kondisi_trafo_setelah/'.$mat->fotoSesudah.'') }}" style="max-height: 3rem;"> <br>
                        </center></td>
                        
       </tr>

       <?php $number++;?> @endforeach
    </tbody>

   
  </table>
  <br><br><br>
<footer><center><span>PT. PLN PERSERO ULP JAJAG BANYUWANGI</span></center></footer>
</body>
</html>