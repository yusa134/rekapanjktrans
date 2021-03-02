<?php
include 'koneksi.php';
$sp = $_GET['sp'];
mysqli_query(
    $host,
    "DELETE FROM data WHERE sp='$sp'"
);

header("location:index.php?pesan=hapus");
