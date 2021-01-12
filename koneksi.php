<?php 

// nama host, Username, password dan nama database
$koneksi = mysqli_connect($_ENV['DBAddress'],$_ENV['DBUsername'],$_ENV['DBPassword'],$_ENV['DBNamegi']);

// Periksa Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>