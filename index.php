<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
	<link rel="stylesheet" href="framework/bootstrap.min.css">
	<script src="framework/jquery-3.5.1.slim.min.js"></script>
	<script src="framework/bootstrap.bundle.min.js"></script>
  	<script src="framework/fa.js"></script>
</head>
<body>
<div class="jumbotron py-5 shadow-sm mt-5 col-lg-8 mx-auto">
  <h1 class="text-dark">Pendaftaran Siswa</h1>
  <p class="lead">Pendaftaran Siswa baru SMK CODING</p>
  <hr class="my-4">
  <p><?php if(isset($_GET['status'])):?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo  '<div class="alert bg-success text-white" role="alert">
Pendaftaran Berhasil
</div>';
            }else{
                echo  '<div class="alert alert-danger" role="alert">
Pendaftaran Gagal
</div>';
            }
            ?>
        </p>
		<?php endif;?></p>
  <a class="btn btn-success btn-lg" href="form_daftar.php" role="button"><i class="fa fa-edit"></i> Daftar Baru</a>
    <a class="btn btn-primary btn-lg" href="list-siswa.php" role="button"><i class="fa fa-check"></i> Pendaftar</a>
</div>
</body>
</html>
