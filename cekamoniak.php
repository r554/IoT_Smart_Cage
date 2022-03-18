<?php 

$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

$sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

$data = mysqli_fetch_array($sql);
$amoniak = $data["amoniak"];

if( $amoniak=="" ) $amoniak = 0;

echo $amoniak;
