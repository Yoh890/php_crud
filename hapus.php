<?php
include('koneksi.php'); 
$conn = new mysqli($hostname,$user,$pass,$database);
global $id_buku;
if(isset($_GET['id_buku'])){
$id_buku = $_GET['id_buku']; 
}
$hapus = $conn->query("DELETE FROM buku WHERE id_buku = '$id_buku'");
//setelah memasukan data redirect ke index/tampil data
	echo "<script>window.location.href='index.php'</script>";
?>