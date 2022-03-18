<?php

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

//ambil data yang dikirim dari NodeMCU
$suhu = $_GET['suhu'];
$kelembaban = $_GET['kelembaban'];
$amoniak = $_GET['amoniak'];

// ====== Simpan ke tabel

//auto incremen = 1 / mengembalikan ID menjadi 1 apabila dikosongkan.
mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

// SImpan data sensor ke tabel
$simpan = mysqli_query($konek, "insert into tb_sensor(suhu,kelembaban,amoniak) values('$suhu', '$kelembaban', '$amoniak')");

//cek simpan untuk memberikan respon
if ($simpan)
	echo "Berhasil Dikirim";
else
	echo "Gagal Dikirim";
