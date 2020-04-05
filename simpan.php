
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
$n1=$_POST['nilaiweb'];
$n2=$_POST['nilaipbo'];
$n3=$_POST['nilaibasdat'];
$n4=$_POST['nilaidesain'];
$n5=$_POST['nilaiprogdas'];

$nr=($n1+$n2+$n3+$n4+$n5)/5;
if ($nr>89)
{ $ket="A";
$pred="Excelent";
}
else if ($nr>79)
{$ket="B";
$pred="Baik";
}
else if ($nr>69)
{$ket="C";
$pred="Cukup";
}
else if ($nr>59)
{$ket="D";
$pred="Kurang";
}
else if ($nr>49)
{$ket="C";
$pred="Cukup";
}
else if ($nr<49)
{$ket="E";
$pred="Rendah";
}
include "../koneksi.php";
$kon=mysqli_connect("localhost","root","","nilai");
mysqli_query($kon,"INSERT into mhs values('$nim','$nm','$jur','$kel','$alm','$n1','$n2','$n3','$n4','$n5','$nr','$ket','$pred')");
?>
<meta http-equiv=refresh content=0;url="index.php">
