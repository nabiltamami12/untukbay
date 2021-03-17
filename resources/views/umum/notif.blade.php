
<?php



function sendNotification()
{


$koneksi = mysqli_connect("localhost","root","","pln");
$today = date('Y-m-d');
$data = mysqli_query($koneksi,"SELECT pemadamen.jadwal_padam,trafos.alamat FROM pemadamen INNER JOIN trafos WHERE pemadamen.id_trafo=trafos.id   ORDER BY pemadamen.id  DESC");
// $data2 = mysqli_query($koneksi,"SELECT * FROM trafos ORDER BY id DESC LIMIT 1");
// $q = mysqli_fetch_array($data2);
$d = mysqli_fetch_array($data);
	$url="https://fcm.googleapis.com/fcm/send";
// $RealToken = "<script>document.writeln(JSON.parse(document.write(localStorage.getItem('x-auth-token'))));</script>";

// $token = "<script>document.write(localStorage.getItem('x-auth-token'));</script>";
// $StringToken = "<script>JSON.parse(retrievedObject);</script>";
	$pesan=array(

		'to' => $_GET['token'],

		'notification' => array(

			'body' => Carbon\Carbon::parse($d['jadwal_padam'])->translatedFormat('l, d F Y') .' '.$d['alamat'].' ' ,
			'title' =>'Pemadaman Listrik Tanggal  '. Carbon\Carbon::parse($d['jadwal_padam'])->translatedFormat('l, d F Y'),
			'icon' => 'https://cdn4.iconfinder.com/data/icons/ui-filed/128/04_Alarm-512.png',
           // 'image' => 'https://cdn4.iconfinder.com/data/icons/ui-filed/128/04_Alarm-512.png',
			'click_action' =>'https://google.com',

		)

	);
	$header = array(
		'Authorization: key=AAAAUGxb-9M:APA91bHl7ySNpIMIAgfNTUVVopkE7NNxYyFgwUPs3GQZROd481YEyTrncDqtA7GIo79QaTjAR3svx4sqTmLrIA7ddP_w_3YLohjZaY3bbD8wMkiMtcoIn18nPewk-I2mChSYXvmDRaSW' , 
		'Content-Type:application/json'
	);
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($pesan));
	$result=curl_exec($ch);
	print_r($result);
	curl_close($ch);



}

 sendNotification(); 

