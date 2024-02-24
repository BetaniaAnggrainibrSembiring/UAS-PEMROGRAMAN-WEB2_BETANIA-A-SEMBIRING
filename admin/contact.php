<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
  
?>
<?php include "header.php"; ?>
<br><style> .jumbotron {color:black} </style>
<div class= "jumbotron" style=background-color:skyblue> </style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
       <center> <h1>Kritik dan Saran Pengujung!</h1> </center>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nama</th><th>Email</th><th>Pesan_Opsional</th><th>Di Terima</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from saran");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['Nama']?></td> 
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['Pesan_Opsional']?></td>
        
                <td>
                <a href="hapus-contact.php?id=<?php echo $row['Nama']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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


<?php include "footer.php";?>