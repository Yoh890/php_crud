<?php
//login
session_start();
$tiket = $_SESSION['login'];
if($tiket!='OK'){
    echo '<script>window.alert("Silahkan login terlebih dahulu!")</script>';
    echo '<script>window.location.href="login.php"</script>';
}
//Memanggil Koneksi
include 'koneksi.php';
$connect    = new mysqli($hostname,$user,$pass,$database);
//Menampilkan Data
$tampil = $connect->query("select * from buku");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-3 mb-2 bg-secondary text-white"><center class="fs-3" class="fw-bolder">Database Perpustakaan</center></div> 
    <a href="tambah.php"><button type="button" class="btn btn-secondary">Tambah</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID_BUKU</th>
      <th scope="col">JUDUL</th>
      <th scope="col">DESKRIPSI</th>
      <th scope="col">PENULIS</th>
      <th scope="col">PENERBIT</th>
      <th scope="col">TAHUN TERBIT</th>
      <th scope="col">KATEGORI</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach ($tampil as $baris) {?>
            <tr>
                <th scope="row"><?=$baris['id_buku']?></th>
                <td><?=$baris['judul']?></td>
                <td><?=$baris['deskripsi']?></td>
                <td><?=$baris['penulis']?></td>
                <td><?=$baris['penerbit']?></td>
                <td><?=$baris['tahun_terbit']?></td>
                <td><?=$baris['kategori']?></td>
                <td><a href="hapus.php?id_buku=<?=$baris['id_buku']?>" onclick= "return confirm('Hapus Data Ini?')"><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg> Hapus</button></a> | <a href="ubah.php?id_buku=<?=$baris['id_buku']?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg> Ubah</button></a></td>
            </tr>
      <?php } ?>
  </tbody>
</table>
<a class="btn btn-danger" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
</svg> Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>