<?php 
include "koneksi.php";

$id = $_GET['id_produk'];
$query = "DELETE FROM tb_pemesan WHERE id = '$id'";
mysqli_query($koneksi,$query);

header('location:tampil_produk.php');