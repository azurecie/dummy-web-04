<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b1d5fe884435dc";
$pass = "345b6a7f";
$name = "thabwebdb";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
