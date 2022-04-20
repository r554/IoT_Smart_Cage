<?php

	$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

	//Tangkap stat yang dikirim oleh ajax
	$stat = $_GET['stat'];
	if($stat == "ON")
	{
		//ubah filed mode menjadi 1
		mysqli_query($konek, "UPDATE tb_kontrol SET mode=1");
		//berikan respon
		echo "ON";
	}else{
		//ubah filed mode menjadi 0
		mysqli_query($konek, "UPDATE tb_kontrol SET mode=0");
		//berikan respon
		echo "OFF";
	}
?>