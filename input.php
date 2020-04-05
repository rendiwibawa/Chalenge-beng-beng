<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard konversi</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body onload="haha()">
    <div id="wrapper">
    <marquee style="font-family:arial; font-size:20px; color:#ffff;"><i id="log"></i></marquee> 
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html" >Hi. Admin</a>
                
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
                        .
                    </li>

                  

                    <li>
                            <a class="active-menu" href="index.php"><i class="fa fa-book fa-2x"></i> Dashboard Penilaian</a>
                        </li><br>
                        <li>
                                <a class="active-menu" href="input.php"><i class="fa fa-edit fa-2x"></i> Input Penilaian</a>
                            </li><br>
                            <li>
                                    <a class="active-menu" href="konversi3.html"><i class="fa fa-lock fa-2x"></i> Logout</a>
                                </li>

                   

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                        
                      
                    </div>
                </div>
<!--  -->


<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Input Nilai</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="simpan.php">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label><br>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                <option value="rpl">RPL</option>
                                <option value="tkj">TKJ</option>
                                <option value="mm">MM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label><br>
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea type="text"class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nilaiweb">Nilai Mapel Web</label>
                            <input type="number" class="form-control" name="nilaiweb" id="nilaiweb" placeholder="Masukkan Nilai Web">
                        </div>
                        <div class="form-group">
                            <label for="nilaipbo">Nilai Mapel PBO</label>
                            <input type="number" class="form-control" name="nilaipbo" id="nilaipbo" placeholder="Masukkan Nilai PBO">
                        </div>
                        <div class="form-group">
                            <label for="nilaibasdat">Nilai Mapel BASDAT</label>
                            <input type="number" class="form-control" name="nilaibasdat" id="nilaibasdat" placeholder="Masukkan Nilai BASDAT">
                        </div>
                        <div class="form-group">
                            <label for="nilaidesain">Nilai Mapel DESAIN</label>
                            <input type="number" class="form-control" name="nilaidesain" id="nilaidesain" placeholder="Masukkan Nilai DESAIN">
                        </div>
                        <div class="form-group">
                            <label for="nilaiprogdas">Nilai Mapel PROGDAS</label>
                            <input type="number" class="form-control" name="nilaiprogdas" id="nilaiprogdas" placeholder="Masukkan Nilai PROGDAS"><br>
                        
                        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                        <button type="reset" class="btn btn-danger" name="simpan">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
