<?php include "header.php"; ?>
<br><style> .jumbotron {color:black} </style>
<div class= "jumbotron" style=background-color:skyblue> </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-masyarakat.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from masyarakat order by Id_masyarakat");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="Id_masyarakat">Id_masyarakat</label>
                        <input type="hidden" name="Id_masyarakat" value="<?php echo $row['Id_masyarakat']?>" class="form-control">
                        <input type="number" name="Id_masyarakat"value="<?php echo $row['Id_masyarakat']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nik">nik</label>
                        <input type="text" name="nik" value="<?php echo $row['nik']?>" class="form-control">
                        </div>

                    <div class="form-group">
                        <label for="nama">Jumlah</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="alamat" name="alamat"  value="<?php echo $row['alamat']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>