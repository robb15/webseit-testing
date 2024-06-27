
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "header.php" ?>

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <tr class="table-primary">
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                    <?php 
                    include "koneksi.php";
                    $query = "SELECT * FROM pengguna";
                    $hasil = mysqli_query($koneksi,$query);
                    while($data = mysqli_fetch_array($hasil)) {
                    ?>
                    <script src="https://kit.fontawesome.com/bf589c66b8.js" crossorigin="anonymous"></script>
                    <tr>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['notelp'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['username'] ?></td>
                        <td>
                            <a href="penggunaubah.php?idpengguna=<?php echo $data['idpengguna'] ?>" class="btn btn-sm btn-success"> Ubah</a>
                            <a href="penggunahapus.php?idpengguna=<?php echo $data['idpengguna'] ?>" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="col-6 text-end">
                <a href="dasbord.html" class="btn btn-info btn-sm"  >Kembali</a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>