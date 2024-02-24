<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
	
  }
?>
<?php include "header.php"; ?>
<br><style> .jumbotron {color:black} </style>
<div class= "jumbotron" style=background-color:skyblue> </style>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
					<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<h2> <marquee><i>HELLO!!..  SELAMAT DATANG DI OFFICIAL WEBSITE DESA HARAPAN KEC. PONDOK KELAPA KAB. BENGKULU TENGAH</i></h2></marquee>
				  <p><h5>  Melalui websete ini kami berkomitmen untuk mewejudkan transparansi pengola data desa untuk kemajuan kita bersama, 
					saran dan masukkan kami harapkan dari semua warga</h5></P>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>