<?php 
session_start();
if($_SESSION['username'] == null) {
    header('location:formlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "header.php" ?>
</head>

<body>
    <?php include "menu.php" ?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6">
                <h1>Form Tambah Pengguna</h1>
            </div>
            <div class="col-6 text-end">
                <a href="pengguna.php" class="btn btn-info btn-sm">Kembali</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <p>
                        Nama :
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </p>
                    <p>
                        No Telp :
                        <input type="text" name="notelp" class="form-control" placeholder="No Telp" required>
                    </p>
                    <p>
                        Alamat :
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                    </p>
                    <p>
                        Username :
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </p>
                    <p>
                        Password :
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </p>

                    <button name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO pengguna VALUES(NULL,'$nama','$notelp','$alamat','$username','$password')";
    mysqli_query($koneksi,$query);

    header('location:pengguna.php');
}
?>