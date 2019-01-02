<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "menshop";

// Koneksi dan memilih database di server
$kon=mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
