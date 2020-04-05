<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard NILAI</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
                        
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body 
onload="haha()">
    <div id="wrapper">
    <marquee style="font-family:arial; font-size:20px; color:#ffffff;">SMK TELKOM MALANG </marquee>
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html" >SMK TELKOM</a>
                
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 0px;
                float: right;
                font-size: 16px;">

                <script type="text/javascript">
                    function haha() {
                        var hari = new Array(7);
                        hari[1] = "SENIN";
                        hari[2] = "SELASA";
                        hari[3] = "RABU";
                        hari[4] = "KAMIS";
                        hari[5] = "JUM'AT";
                        hari[6] = "SABTU";
                        hari[0] = "MINGGU";
                        var bulan = new Array(12);
                        bulan[1] = "January";
                        bulan[2] = "February";
                        bulan[3] = "Maret";
                        bulan[4] = "April";
                        bulan[5] = "Mei";
                        bulan[6] = "Juni";
                        bulan[7] = "July";
                        bulan[8] = "Agustus";
                        bulan[9] = "September";
                        bulan[10] = "Oktober";
                        bulan[11] = "November";
                        bulan[12] = "Desember";
                        var tgblth = new Date();
                        var Tanggal = tgblth.getDate();
                        var jam = tgblth.getHours();
                        var menit = tgblth.getMinutes();
                        var Tahun = tgblth.getFullYear();
                        var nmBulan = bulan[tgblth.getMonth() + 1];
                        var nmHari = hari[tgblth.getDay()];
                        TEKS = nmHari + ", " + " " + jam + ":" + menit + ",Tanggal :" + Tanggal + " " + nmBulan + " " + Tahun;
                        document.getElementById("log").innerHTML = TEKS;
                        
                    }
                </script>
                 </div>
        </nav>
        <!-- /. NAV TOP  -->
        
       
        <nav class="navbar-default navbar-side" role="navigation" style="border-right: 2px solid #c90000">
        
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="tlk.jpg" width="200px" height="200px" padding="100px"class="img-circle" /><br>
                        .<br>
                    </li>

                  

                    <li>
                            <a class="active-menu" href="index.php"><i class="fa fa-book fa-2x"></i> Dashboard Penilaian</a>
                        </li><br>
                        <li>
                                <a class="active-menu" href="input.php"><i class="fa fa-edit fa-2x"></i> Input Penilaian</a>
                            </li><br>
                            <li>
                                    <a class="active-menu" href="http://localhost/nilai/login/index.php"><i class="fa fa-lock fa-2x"></i> Logout</a>
                                </li>

                   

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <i id="log"></i>
                        
                      
                    </div>
                </div>
<!--  -->
<?php 
include "./koneksi.php";
$date=date("l, d F Y, H:i:s");
$kon=mysqli_connect("localhost","root","","nilai");
$tampil=mysqli_query($kon,"SELECT * from mhs");
$jumlah=mysqli_num_rows($tampil);
while ($data=mysqli_fetch_array($tampil)){
    $anggota[] = $data;
}

?>

<div class="card">
    <div class="card-header">
    
        <h2 class="card-title"><i class="far fa-edit"></i>Data Nilai</h2>
        <a href="input.php" class="badge badge-success">Tambah</a>
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Web</th>
      <th scope="col">PBO</th>
      <th scope="col">Basdat</th>
      <th scope="col">Desain</th>
      <th scope="col">  Progdas</th>
      <th scope="col">Rata-Rata</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Predikat</th>
      
    </tr>
  </thead>
  <?php
    $no = 1;
    foreach ($anggota as $p ) { ?>
    
    <tr>
        <td scope="row"><?= $no ?></td>
        <td><?=$p['nis']?></th>
        <td><?=$p['nama']?></th>
        <td><?=$p['jurusan']?></th>
        <td><?=$p['kelas']?></th>
        <td><?=$p['alamat']?></th>
        <td><?=$p['nilaiweb']?></th>
        <td><?=$p['nilaipbo']?></th>
        <td><?=$p['nilaibasdat']?></th>
        <td><?=$p['nilaidesain']?></th>
        <td><?=$p['nilaiprogdas']?></th>
        <td><?=$p['rata']?></th>
        <td><?=$p['predikat']?></th>
        <td><?=$p['ket']?></th>
     
       
        <td>
           
           
            <a href='hapus.php?nis=$p[nis]'class="badge badge-danger">Hapus</a>
            
        </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>
             
</body>

</html>
<!-- ASLI -->


