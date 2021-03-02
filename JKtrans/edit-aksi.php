<?php
include 'koneksi.php';
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

mysqli_query($host, "UPDATE data SET 
        
        colli='$colli',
        berat='$berat', 
        franco='$franco',
        confrankert = '$confrankert',
        penerima = '$penerima',
        keterangan = '$keterangan'
        WHERE sp='$sp'");

header("location:index.php?pesan=input");
