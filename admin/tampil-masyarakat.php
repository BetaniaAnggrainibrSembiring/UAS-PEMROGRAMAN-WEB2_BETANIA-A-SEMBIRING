<?php include "header.php"; ?>
<br><style> .jumbotron {color:black} </style>
<div class= "jumbotron" style=background-color:skyblue> </style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
       <center> <h2>DATA MASYARAKAT DESA HARAPAN</h2> </center>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Id_masyarakat</th><th>nik</th><th>nama</th><th>alamat</th>
                <th>
                    <a href="input-masyarakat.php">
                        <button class="btn btn- info glyphicon glyphicon-plus"></button>
</a>
</th>

            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from masyarakat order by Id_masyarakat ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['Id_masyarakat']?></td>
                <td><?php echo $row['nik']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['alamat']?></td>
                <td>
                <a href="edit-masyarakat.php?id=<?php echo $row['Id_masyarakat']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-masyarakat.php?id=<?php echo $row['Id_masyarakat']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>
            

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
   


<?php include "footer.php"; ?>