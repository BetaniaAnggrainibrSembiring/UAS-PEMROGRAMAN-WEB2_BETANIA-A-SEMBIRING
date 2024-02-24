<?php

$Id=$_POST['Id_masyarakat'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

include "koneksi.php";

$simpan=$koneksi->query("insert into masyarakat(Id_masyarakat,nik,nama,alamat) 
                        values ('$Id_masyarakat', '$nik', '$nama', '$alamat')");

if($simpan==true){

    header("location:tampil-masyarakat.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>    