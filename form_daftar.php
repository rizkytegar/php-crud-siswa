<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran Siswa Baru</title>
  <link rel="stylesheet" href="framework/bootstrap.min.css">
  <script src="framework/jquery-3.5.1.slim.min.js"></script>
  <script src="framework/bootstrap.bundle.min.js"></script>
  <script src="framework/fa.js"></script>
</head>
<body class="bg-light">
  <div class="container col-lg-8 shadow py-5 bg-white mx-auto mt-5 mb-5">
    <form class="col-lg-7 mx-auto" action="proses-pendaftaran.php" method="POST">
      <h3 class="mb-3 text-center"><i class="fa fa-edit"></i> Form Pendaftaran</h3>
      <div class="form-group mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : Rizky Tegar" required>
      </div>
      <div class="form-group mb-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
      </div>
      <label>Jenis Kelamin</label>
      <div class="row mb-3 mx-auto">

        <div class="form-check col-lg-6">
          <input class="form-check-input" name="jenis_kelamin" type="radio" name="exampleRadios" id="exampleRadios1" value="Laki-laki" checked>
          <label class="form-check-label" for="exampleRadios1">
            Laki-Laki
          </label>
        </div>
        <div class="form-check col-lg-6">
          <input class="form-check-input" name="jenis_kelamin" type="radio" name="exampleRadios" id="exampleRadios2" value="Perempuan">
          <label class="form-check-label" for="exampleRadios2">
            Perempuan
          </label>
        </div>
      </div>
      <div class="form-group mb-3">
        <label for="exampleFormControlSelect1">Agama</label>
        <select class="form-control" name="agama" id="exampleFormControlSelect1" required>
          <option>Pilih...</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindu</option>
          <option>Budha</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="sekolah" required>Sekolah Asal</label>
        <input type="text" class="form-control" id="sekolah" name="sekolah_asal" placeholder="Contoh : Smk Pgri 2 Taman" required>
      </div>
   <a class="btn btn-success text-white" href="list-siswa.php"><i class="fa fa-list-alt"></i> Pendaftar</a>
      <button type="submit" name="daftar" class="btn btn-primary"><i class="fa fa-save"></i> Daftar</button>

    </form>
  </div>
</body>
</html>
