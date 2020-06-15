<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "dbdonasiku";

$koneksi1 = mysqli_connect($host, $user, $pass, $name, $id, $norek, $jml) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih"); 

?>