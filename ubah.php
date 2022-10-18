<?php
	include ('koneksi.php');
	$id_buku		= $_GET['id_buku'];
	$connect 		= new mysqli($hostname,$user,$pass,$database);
	$data 			= $connect->query("select * from buku where id_buku ='$id_buku'");
	$tampil 		= $data->fetch_assoc();
?>

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
  <input type="text" name="id_buku" placeholder="ID Buku" value="<?=$tampil['id_buku']?>"><br>
  <input type="text" name="judul" placeholder="Judul Buku" value="<?=$tampil['judul']?>"><br>
  <input type="text" name="deskripsi" placeholder="Deskripsi" value="<?=$tampil['deskripsi']?>"><br>
  <input type="text" name="penulis" placeholder="Penulis" value="<?=$tampil['penulis']?>"><br>
  <input type="text" name="penerbit" placeholder="Penerbit" value="<?=$tampil['penerbit']?>"><br>
  <input type="text" name="tahun_terbit" placeholder="Tahun Terbit" value="<?=$tampil['tahun_terbit']?>"><br>
  <input type="text" name="kategori" placeholder="Kategori" value="<?=$tampil['kategori']?>"><br>
  
  <br>
  
  <input type="submit" name="ubah" button type="button" class="btn btn-warning">
</form>
<?php

if(isset($_POST['ubah'])){


  $id_buku = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $kategori = $_POST['kategori'];
  

  $conn = new mysqli($hostname,$user,$pass,$database);
  $sql = "update buku set
      
      id_buku = '$id_buku',
      judul = '$judul',
      deskripsi = '$deskripsi',
      penulis = '$penerbit',
      tahun_terbit = '$tahun_terbit',
      kategori = '$kategori' where id_buku='$id_buku'";
  $conn = $conn->query($sql);
  //setelah memasukan data redirect ke index/tampil data
  echo "<script>window.location.href='index.php'</script>"; 
} ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>