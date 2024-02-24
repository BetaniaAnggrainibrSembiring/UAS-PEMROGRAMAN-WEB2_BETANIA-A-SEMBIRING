<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navbar (Navigation Bar) dengan Bootstrap</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar" style="background-color: rgb(102, 131, 238); ;">
 		<div class="container">
		<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Nav</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>

          <?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, saran anda sudah terkirim!
									</div>
					<?php

					}

					?>
		<a class="navbar-brand" href="#" style="color: white;"> DESA HARAPAN</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li><a href="index.php" style="color: white;"><span class="glyphicon glyphicon-home"></span> HOME <span class="sr-only"> (current)</span></a></li>
			<li class="active"><a href="profildesa.php" style="color: white;"> PROFIL DESA</a></li>
			<li><a href="datapemerintahan.php" style="color: white;">PEMERINTAHAN DESA</a></li>
    		<li class="dropdown" >
				<a href="layanan.php" style="color: white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> LAYANAN <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="aktakelahiran.php">layanan AKTA KELAHIRAN</a></li>
						<li><a href="aktakematian.php">layanan AKTA KEMATIAN</a></li>
						<li><a href="ktp.php">layanan KTP</a></li>
			</ul>
<li>

	<a href="hubungikami.php"style="color: white;"> HUBUNGI KAMI</a></li> </ul>

	<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="login.php"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> USER <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="login.php">Profile</a></li>
				<li><a href="#">Logout</a></li>
				</ul>
			</li>
			</ul>
	
		
		</div>
		</div>	
		<img src="images/bc.jpg" width="100%" height="200px">
    </nav>
    <div class="container">
            
        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <font face="serif">
          <h4> <center>     -------INFORMASI KONTAK DESA HARAPAN-------</center></h4></div>
          <div class="panel-body">
            
            <p><h4><span class="glyphicon glyphicon-earphone"></span>   (+6282292344814)</h4></p></div>
            <div class="panel-body">
            <p><h4><span class="glyphicon glyphicon-envelope"></span>    taniaanggraini698@gmail.com</h4></p></div>
            <div class="panel-body">
            <p><h4><span class="glyphicon glyphicon-map-marker"></span>  DESA HARAPAN PONDOK KELAPA KAB. BENGKULU TENGAH</h4></p></div>

            <div class="panel-body">
            <p><h4><span class="glyphicon glyphicon-question-sign"></span>   Form ini digunakan untuk mengirim aduan saran dan kritik </h4></p></div>
            <div class="panel-body">
            <p><h4><span class="glyphicon glyphicon-info-sign"></span>    Anda juga dapat meminta pelayaan berkas melalui halaman ini atau menhubungi kontak kami</h4></p></div>

             
              <div class="panel-footer"
            
              <h3> <center><span class="glyphicon glyphicon-star">   WWWW. DESA HARAPAN COM   <span class="glyphicon glyphicon-star"></center></span></h3></div></font></div></div>
              <div class="container">
         <font face="serif">
          <!-- Awal Page -->


		<div class="container">  
        <div class="col-md-7">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <font face="serif">
                    <h2 style="text-muted"><h2><span class="glyphicon glyphicon-earphone"> Contact</h2><br></div>
                    <div class="panel-body">
                    <?php 

if(@$_GET['SIMPAN']=="inputBerhasil"){
  
    echo "<script>alert('Saran Telah Diterima');</script>";
    echo "<script>location= 'hubungikami.php'</script>";
    }



?>
                  

<form action="proses-saran.php" method="post">
                            <table class="table table-hover">
                                <tr>
                                    <td>  Nama Lengkap
                                    <input type="text" name="Nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat Email
                                    <input type="Email" name="Email" class="form-control input-md" placeholder="@gmail.com " required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pesan Anda (opsinal)
                                    <textarea name="Pesan_Opsional" class="form-control input-md" required> </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                                     <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                                    </td> <br><br><br><br>
                                </tr>
                            </table>
                        </form>
                    </div>
                    
          </div><br><br><br><br><br><br>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-inverse">
                <div class="panel-footer">
                <font face="serif">
                  <h3><div class="col-md-3"><p><a href="index.php"> | HOME |</a></p></div>   <div class="col-md-3"><p><a href="hubungikami.php">| CONTACT US |</a></p></div>  <div class="col-md-3"><p><a href="profildesa.php"> | ABOUT |</a></p></div>    <div class="col-md-3"><p><a href="hubungikami.php">| SIGN IN |</a></h3><br><center><strong>WWW.DESA HARAPAN.COM</strong></p>
                  <small>CopyRight & copy; 2023 - taniaanggraini@gmail.com All Right Reserved</small></p><strong>__________________________________<BR>          BETANIAANGGRAINI_SEMBIRING
                      <br>__________________________________</strong></font></nav>
                </div>
                </div>
                </div><!-- Akhir FOOTER -->
                </div>
                </div>
                <script src="bootstrap/js/jQuery.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
                </body>
                </html>