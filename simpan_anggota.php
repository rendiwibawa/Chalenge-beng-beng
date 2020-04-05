<?php

$nim=$_POST['nis'];
$nm=$_POST['nama'];
$jur="";
if($_POST['jurusan'] == "rpl"){
       $jur = "rpl";
   }else if($_POST['jurusan'] == "tkj"){
       $jur = "tkj";
   }else if($_POST['jurusan'] == "mm"){
       $jur = "mm";
   }
$kel="";
if($_POST['kelas'] == "X"){
       $kel = "X";
   }else if($_POST['kelas'] == "XI"){
       $kel = "XI";
   }else if($_POST['kelas'] == "XII"){
       $kel = "XII";
   }
$alm=$_POST['alamat'];
$kon=mysqli_connect("localhost","root","","nilai");
mysqli_query($kon,"INSERT into siswa values('$nim','$nm','$jur','$kel','$alm')");
?>
