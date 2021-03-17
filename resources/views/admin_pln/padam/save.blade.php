<?php
	include 'database.php';
	$nama_barang=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah'];
	
	$sql = "INSERT INTO `crud`( `nama_barang`, `jumlah`) 
	VALUES ('$nama_barang','$jumlah')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>