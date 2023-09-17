<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title></title>
</head>
<body>
    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        Kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok :
        <input type="text" name="kelompok" value="" class="form-control"><br>
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>
</body>
</html>