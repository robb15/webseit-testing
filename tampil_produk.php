<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bf589c66b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="tampil_produk.css">
    <title>data pesanan</title>
</head>
<body>
    <header class="sticky">
        <a href="foto/logo.png" class="logo" ><img src="logo.png" alt=""></a>

        <ul class="navmenu">
            <li><a href="dasbord.html"><i class="fa-solid fa-house"></i></a></li>
        </ul>
        <div class="tulisan">
        <h2>data pesanan</h2>
        </div>
        
        <div class="ceklis">
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <br><p>0</p>
        </div>
       
    </header> 
    <br><br><br><br><br><br><br><br><br><br>
    <?php $ambil = $koneksi->query("SELECT * FROM tb_pemesan"); ?>
            <?php while ($perproduk = $ambil->fetch_assoc()){ ?>
          
    <section class="konten" >
    <div class="produk">
    <div id="kotak" >
        <div class="row">
                <div class="col-md-3">
                    <div class="thum">
                        <img src="2.jpg" alt="">
                        <div class="text"  >
                            <h5 ><u> nama          :<?php  echo $perproduk['nama_konsumen'] ?></u></h5><br>
                            <h5>pilihan paket   : <?php echo $perproduk['nama_paket'] ?></h5>
                            <h5 >harga          : <?php echo $perproduk['harga_paket'] ?></h5>
                            <h5>tanggal acara   : <?php echo $perproduk['tanggal_acara'] ?></h5>
                        </div>
                        <div class="tombol">
                            
                            <a  href="hapusproduk.php?id_produk=<?php echo $perproduk['id'] ?>" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>    
    </div>  
    
            <?php } ?>

    <script src="js.js"></script>
            </section>
</body>
</html>