<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penanganan Form dan Variabel-Pemweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="mx-5 my-3">
    <h1>Form Input</h1>
    </div>
   
    <div class="mx-5 my-3">
    <form action="tampil.php" methode="post" name="input">
    <div class="mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama " required="">
        </div>
        <div class="mb-3">
        <label for="mk" class="form-label">Mata Kuliah </label>
        <input type="text" class="form-control" name="mk" id="mk" placeholder="Masukan Mata Kuliah" required="">
        </div>
        <div class="mb-3">
        <label for="dosen" class="form-label">Dosen Pengampu</label>
        <input type="text" class="form-control" name="dosen" id="dosen" placeholder="Masukan Nama Dosen" required="">
        </div>
        <input type="submit" name="submit" value="kirim" class="btn btn-primary">
        <!-- <a href="tamil.php" class="btn btn-primary">Kirim</a> -->
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>