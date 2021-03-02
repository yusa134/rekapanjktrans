<?php
include 'koneksi.php';
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];
 
mysqli_query($host,"INSERT INTO data VALUES('','$colli','$berat','$franco','$confrankert','$penerima','$keterangan')");
 
header("location:index.php?pesan=input");
?>