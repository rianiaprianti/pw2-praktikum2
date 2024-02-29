<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
    <div class="container">
  <h2>Form Nilai</h2>
  <form method="POST" action="form_nilai.php">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
    </div>
    <div class="form-group">
      <label for="matkul">Mata Kuliah:</label>
      <select name="matkul" id="matkul">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemrograman Web 1</option>
</select>
    <div class="form-group">
      <label for="nilai_uts">Nilai UTS:</label>
      <input type="text" class="form-control" id="nilai_uts" placeholder="nilai uts" name="nilai_uts">
    </div>
    <div class="form-group">
      <label for="nilai_uas">Nilai UAS:</label>
      <input type="text" class="form-control" id="nilai_uas" placeholder="nilai uas" name="nilai_uas">
    </div>
    <div class="form-group">
      <label for="nilai_tugas">Nilai Tugas:</label>
      <input type="text" class="form-control" id="nilai_tugas" placeholder="nilai tugas" name="nilai_tugas">
    </div>
    <input type="submit" value="Simpan" name="proses"/>
  </form>
</div>
    </body>
</html>