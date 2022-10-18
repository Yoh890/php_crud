<!doctype html>
<html lang="en">
  <head>
    <div class="p-3 mb-2 bg-warning text-dark"><center class="fs-3" class="fw-bolder">Masukkan Data Dengan Benar!!!</center></div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST">
  <label>Id buku</label>
  <input type="text" name="id_buku"><br>
  <label>Judul</label>
  <input type="text" name="judul" required="required"><br>
  <label>Deskripsi</label>
  <input type="text" name="deskripsi"><br>
  <label>Penulis</label>
  <input type="text" name="penulis"><br>
  <label>Penerbit</label>
  <input type="text" name="penerbit"><br>
  <label>Tahun Terbit</label>
  <input type="text" name="tahun_terbit"><br>
  <label>Kategori</label>
  <input type="text" name="kategori"><br>
  
  <input type="submit" name="simpan" button type="button" class="btn btn-warning">
</form>
<?php
if(isset($_POST['simpan'])){
  $id_buku = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $kategori = $_POST['kategori'];

  include 'koneksi.php';
  $connect  = new mysqli($hostname,$user,$pass,$database);

  $tambah   = $connect->query("insert into buku values ('$id_buku','$judul','$deskripsi','$penulis','$penerbit','$tahun_terbit','$kategori')");
  echo "<script>window.location.href='index.php'</script>";

}?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>