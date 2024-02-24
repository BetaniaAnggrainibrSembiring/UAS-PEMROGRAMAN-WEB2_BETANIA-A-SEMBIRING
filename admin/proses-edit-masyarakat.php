<?php

$id=$_POST['Id_masyarakat'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

include "koneksi.php";

$simpan=$koneksi->query("update masyarakat set Id_masyarakat ='$id', nik='$nik', nama='$nama', alamat='$alamat' where Id_masyarakat='$id'"); 
                       
if($simpan==true){

    header("location:tampil-masyarakat.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>