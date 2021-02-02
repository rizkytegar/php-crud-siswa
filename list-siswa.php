
<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Siswa Baru | SMK Coding</title>
<link rel="stylesheet" href="framework/bootstrap.min.css">
	<script src="framework/jquery-3.5.1.slim.min.js"></script>
	<script src="framework/bootstrap.bundle.min.js"></script>
		<script src="framework/fa.js"></script>
</head>
<body>
<div class="container mt-3 col-lg-8 mx-auto">
<a class="btn btn-success mb-3" href="index.php" role="button"><i class="fa fa-home"></i> Menu Utama</a>
<a class="btn btn-primary mb-3" href="form_daftar.php" role="button"><i class="fa fa-plus"></i> Tambah Baru</a>
<table class="table table-dark">
  <thead>
    <tr>
  <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
			<th scope="col">Agama</th>
			<th scope="col">Sekolah Asal</th>
				<th scope="col">Edit</th>
					<th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$i=1;
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($db, $sql);
		while($siswa = mysqli_fetch_array($query)){
		echo "<tr>";
		echo "<td>".$i++."</td>";
		echo "<td>".$siswa['nama']."</td>";
		echo "<td>".$siswa['alamat']."</td>";
		echo "<td>".$siswa['jenis_kelamin']."</td>";
		echo "<td>".$siswa['agama']."</td>";
		echo "<td>".$siswa['sekolah_asal']."</td>";

		echo "<td><a class='btn btn-sm bg-success text-white' href='form-edit.php?id=".$siswa['id']."'><i class='fa fa-edit'></i> Edit</a></td> ";

				echo "<td><a class='btn btn-sm bg-danger text-white' href='hapus.php?id=".$siswa['id']."'><i class='fa fa-trash'></i> Hapus</a></td> ";
		echo "</tr>";
		}
		?>

  </tbody>
</table>
<h4>Total Pendaftar : <?php echo mysqli_num_rows($query) ?></h4>
</body>
</html>
