<?php
$koneksi = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b4542555d2d90a","d1b5e0cb","heroku_886009116dcb904");

if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>