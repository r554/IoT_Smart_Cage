<?php 

$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

$sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

$data = mysqli_fetch_array($sql);
$kelembaban = $data["kelembaban"];

if( $kelembaban == "" ) $kelembaban = 0;

echo $kelembaban;
