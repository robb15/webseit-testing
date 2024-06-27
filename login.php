<?php
require 'koneksi.php';
$email = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM pengguna
            WHERE username = '$email' AND password ='$password'";
$result = mysqli_query($koneksi, $query_sql);
if (mysqli_num_rows($result) > 0) {
    header ("location:dasbord.html");
} else {
    echo "<div class='alert alert-info text-center'><b>Login Anda Gagal, Silahkan Ulangi Lagi</b></div>";
}
