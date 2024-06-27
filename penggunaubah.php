

<?php 
include "koneksi.php";
$id = $_GET['idpengguna'];
$query = "SELECT * FROM pengguna WHERE idpengguna = '$id'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
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
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6">
                <h1>Form Ubah Pengguna</h1>
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
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" placeholder="Nama" required>
                    </p>
                    <p>
                        No Telp :
                        <input type="text" name="notelp" value="<?php echo $data['notelp'] ?>" class="form-control" placeholder="No Telp" required>
                    </p>
                    <p>
                        Alamat :
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control" placeholder="Alamat" required>
                    </p>
                    <p>
                        Username :
                        <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control" placeholder="Username" required>
                    </p>
                    <p>
                        Password :
                        <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control" placeholder="Password" required>
                    </p>

                    <button name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE pengguna SET nama = '$nama',notelp = '$notelp',alamat = '$alamat',username = '$username',password = '$password' WHERE idpengguna = '$id'";
    mysqli_query($koneksi,$query);

    header('location:pengguna.php');
}
?>