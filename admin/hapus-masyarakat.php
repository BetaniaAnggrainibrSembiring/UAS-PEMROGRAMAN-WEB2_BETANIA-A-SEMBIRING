<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from masyarakat where id_masyarakat='$id'");

if($hapus==true){

    header("location:tampil-masyarakat.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>