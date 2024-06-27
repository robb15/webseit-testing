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
                        <th>no</th>
                        <th>nama produk</th>
                        <th>harga</th>
                        <th>berat</th>
                        <th>foto</th>
                        <th>deskripsi</th>
                    </tr>
                    <?php 
                    include "koneksi.php";
                    $query = "SELECT * FROM produk";
                    $hasil = mysqli_query($koneksi,$query);
                    while($data = mysqli_fetch_array($hasil)) {
                    ?>
                    <script src="https://kit.fontawesome.com/bf589c66b8.js" crossorigin="anonymous"></script>
                    <tr>
                        <td><?php echo $data['id_produk'] ?></td>
                        <td><?php echo $data['nama_produk'] ?></td>
                        <td><?php echo $data['harga_produk'] ?></td>
                        <td><?php echo $data['berat_produk'] ?></td>
                        <td><?php echo $data['foto_produk'] ?></td>
                        <td><?php echo $data['deskripsi_produk'] ?></td>
                    
                       
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