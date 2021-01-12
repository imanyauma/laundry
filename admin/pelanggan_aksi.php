<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$insert_id = mysqli_insert_id($koneksi);

// input data ke tabel pelanggan
mysqli_query($koneksi,"insert into pelanggan values('$insert_id','$nama','$hp','$alamat')");

header("location:pelanggan.php");

?>