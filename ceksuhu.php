<?php 

$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

$sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

$data = mysqli_fetch_array($sql);
$suhu = $data["suhu"];

if( $suhu=="" ) $suhu = 0;

echo $suhu;
