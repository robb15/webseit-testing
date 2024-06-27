<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col">
               
            
                <table class="table">
                    <tr class="table-dark">
                        <td>Nama</td>
                        <td>nomor handphone</td>
                        <td>email</td>
                       

                    </tr>
                    <?php 
                    include "koneksi.php";
                    
                    $query = "SELECT * FROM tb_konsumen";
                    $hasil = mysqli_query($koneksi,$query);
                    while($data = mysqli_fetch_array($hasil)) {
                    ?>
                    <tr>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['no_handphon'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                       

                        
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>