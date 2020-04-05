<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nis  = $_GET['nis'];
// query SQL untuk insert data
$query="DELETE from mhs where nis='$nis'";
mysqli_query($kon, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>