<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "website";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkonek");
}else{
    echo "Koneksi Berhasil";
}