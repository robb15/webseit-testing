<?php
require 'koneksi.php';
$nama_lengkap = $_POST["nama_lengkap"];
$nomor_telpon = $_POST["nomor_telpon"];
$alamat = $_POST["alamat"];
$username = $_POST ["username"];
$password = $_POST["password"];

$query_sql ="INSERT INTO pengguna (nama, notelp, alamat,  username , password )
             VALUES ('$nama_lengkap' , '$nomor_telpon' , '$alamat', '$username' , '$password') ";

if (mysqli_query($koneksi , $query_sql))  {
    header ("location:index.html");

} else {
      echo "pendaftaran gagal : " . mysqli_error($koneksi);
    }
?>