<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChartJS (Grafik Batang) dengan Bootstrap</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
	<script src="bootstrap/plugins/chartjs/Chart.js"></script>
	<script src="bootstrap/plugins/chartjs/utils.js"></script>
	<script src="bootstrap/plugins/chartjs/chartjs-plugin-datalabels.min.js"></script>
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
	   <a class="navbar-brand" href="#" style="color: white;"> DESA HARAPAN</a>
	   </div>
	   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		   <ul class="nav navbar-nav">
		   <li><a href="index.php" style="color: white;"><span class="glyphicon glyphicon-home"></span> HOME <span class="sr-only"> (current)</span></a></li>
		   <li><a href="profildesa.php" style="color: white;"> PROFIL DESA</a></li>
		   <li><a href="datapemerintahan.php" style="color: white;">PEMERINTAHAN DESA</a></li>
		   <li class="active"><a href="pendudukk.php"style="color: white;"> DATA DESA</a></li>
		   <li class="dropdown" >
			<a href="layanan.php" style="color: white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> LAYANAN <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">layanan AKTA KELAHIRAN</a></li>
					<li><a href="#">layanan KARTU KELUARGA</a></li>
					<li><a href="#">layanan KTP</a></li>
		</ul>
	</li>
</li>
<li><a href="contak.php"style="color: white;"> HUBUNGI KAMI</a></li></ul>
			   </li>
		   </ul>
		   <form class="navbar-form navbar-left">
			   <div class="form-group">
				   <input type="text" class="form-control" placeholder="isi keyword">
				   </div>
				   <button type="submit" class="btn btn default">cari</button>
		   </form>
			   </li>
			   </ul>
	   </div>
	   </div>	
	   <img src="images/bc.jpg" width="100%" height="200px">
   </nav>
   <html>
	   <head>
		   <meta charset="utf-8">
		   <meta name="viewport" content="width=device-width, initial-scale=1">
		   <title>Jumbotron dengan Bootstrap</title>
		   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	   </head>
	   <body>
		<div class="col-md-12" style="background-color:rgb(102, 131, 238); ;"> 
			<div class="container">
				<div class="row" style="color: white;" >
					
					  <h2> <marquee>SELAMAT DATANG DI OFFICIAL WEBSITE DESA HARAPAN KEC. PONDOK KELAPA KAB. BENGKULU TENGAH</h2></marquee>
					  <p><h5>  Melalui websete ini kami berkomitmen untuk mewejudkan transparansi pengola data desa untuk kemajuan kita bersama, 
						saran dan masukkan kami harapkan dari semua warga</h5></P>
					  <a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya</a> 
					  <a class="btn btn-danger btn-lg" href="#" role="button">Masuk</a></p>
					   </div>
				   </div>
			   </div>
		   </div>
		   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
		<div class="row">
			<div class="col-md-8">	
			<canvas id="jlhMahasiswa"/>
			<script>
				var config = {
						type: 'bar',
						data: {
							datasets: [{
								data: [
										2000,
										1300,
										600
								],
								backgroundColor: [	
									window.chartColors.red,
									window.chartColors.blue,
									window.chartColors.yellow,
								],  
							}],
							labels: [
								"dewasa",
								"anak anak",
								"lansia"
							]
						},
						options: {
							plugins: {
							datalabels: {
								borderColor: 'white',
								borderRadius: 50,
								borderWidth: 2,
								color: 'white',
								font: {
									weight: 'bold'
									},
								}
							},								
							legend: {
								display:false,
							},
							title: {
								display: true,
								text: 'Jumlah penduduk tahun 2023'
							},
							animation: {
								animateScale: true,
								animateRotate: true
							},
							scales: {
							xAxes: [{
								stacked: true
							}],
							yAxes: [{
								stacked: true
							}]
						},
						}
				};
				var grafikMahasiswa = document.getElementById("jlhMahasiswa").getContext("2d");
				window.myPie = new Chart(grafikMahasiswa, config);
			</script>
			</div>
	</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>