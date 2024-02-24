<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
<br><style> .jumbotron {color:black} </style>
<div class= "jumbotron" style=background-color:skyblue> </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-masyarakat.php" method="POST">
                    <div class="form-group">
                        <label for="Id_masyarakat">Id MASYARKAT</label>
                        <input type="number" name="Id_masyarakat" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nik">nik</label>
                        <input type="text" name="nik" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>