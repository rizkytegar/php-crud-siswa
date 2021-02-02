<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
header('Location: list-siswa.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Edit Siswa</title>
  <link rel="stylesheet" href="framework/bootstrap.min.css">
  <script src="framework/jquery-3.5.1.slim.min.js"></script>
  <script src="framework/bootstrap.bundle.min.js"></script>
  <script src="framework/fa.js"></script>
</head>
<body class="bg-light">
  <div class="container col-lg-8 shadow py-5 bg-white mx-auto mt-5 mb-5 ">
    <form class="col-lg-7 mx-auto" action="proses-edit.php" method="POST">
      <h3 class="mb-3 text-center"><i class="fa fa-edit"></i> Form Edit</h3>
			<fieldset>
			<input type="hidden" name="id" value="<?php echo

			$siswa['id'] ?>" />
      <div class="form-group mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa['nama'] ?>" required>
      </div>

      <div class="form-group mb-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" name="alamat" required><?php echo $siswa['alamat'] ?></textarea>
      </div>
      <label>Jenis Kelamin</label>
      <div class="row mb-3 mx-auto">
<?php $jk = $siswa['jenis_kelamin']; ?>
        <div class="form-check col-lg-6">
          <input class="form-check-input" name="jenis_kelamin" type="radio" name="exampleRadios" id="exampleRadios1" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>
          <label class="form-check-label" for="exampleRadios1">
            Laki-Laki
          </label>
        </div>
        <div class="form-check col-lg-6">
          <input class="form-check-input" name="jenis_kelamin" type="radio" name="exampleRadios" id="exampleRadios2" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>
          <label class="form-check-label" for="exampleRadios2">
            Perempuan
          </label>
        </div>
      </div>
      <div class="form-group mb-3">
        <label for="exampleFormControlSelect1">Agama</label>
				<?php $agama = $siswa['agama']; ?>
        <select class="form-control" name="agama" id="exampleFormControlSelect1" required>
					<option <?php echo ($agama == 'Pilih...') ?

					"selected": "" ?>>Pilih...</option>
					<option <?php echo ($agama == 'Islam') ?

					"selected": "" ?>>Islam</option>

					<option <?php echo ($agama == 'Kristen') ?

					"selected": "" ?>>Kristen</option>

					<option <?php echo ($agama == 'Hindu') ?

					"selected": "" ?>>Hindu</option>

					<option <?php echo ($agama == 'Budha') ?

					"selected": "" ?>>Budha</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="sekolah" required>Sekolah Asal</label>
        <input type="text" class="form-control" id="sekolah" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>" required>
      </div>
   <a class="btn btn-warning text-white" href="list-siswa.php"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
		</fieldset>
    </form>
  </div>
</body>
</html>
