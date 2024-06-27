<?php 
include "koneksi.php";

$id = $_GET['idpengguna'];
$query = "DELETE FROM pengguna WHERE idpengguna = '$id'";
mysqli_query($koneksi,$query);

header('location:pengguna.php');