
<?php

include "koneksi.php";
$Nama = $koneksi->real_escape_string($_POST['Nama']); 
$Email = $koneksi->real_escape_string($_POST['Email']); 
$Pesan_Opsional = $koneksi->real_escape_string($_POST['Pesan_Opsional']); 


$simpan=$koneksi->query("insert into saran(Nama,Email,Pesan_Opsional) 
                        values ('$Nama', '$Email', '$Pesan_Opsional')");

if($simpan==true){

    header("location:hubungikami.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>