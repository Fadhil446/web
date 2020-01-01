<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi agan sendiri
$koneksi = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b4542555d2d90a","d1b5e0cb","web");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>