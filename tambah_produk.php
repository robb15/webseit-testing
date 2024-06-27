<?php
require 'koneksi.php';
if(isset($_POST['login'])){
$nama_konsumen = $_POST["nama_konsumen"];
$nama_paket = $_POST["nama_paket"];
$harga_paket = $_POST["harga_paket"];
$tanggal_acara = $_POST["tanggal_acara"] ;




 

  $query_sql ="INSERT INTO tb_pemesan ( nama_konsumen, nama_paket, harga_paket,  tanggal_acara )
             VALUES (  '$nama_konsumen' , '$nama_paket' , '$harga_paket', '$tanggal_acara' ) ";
             
             if (mysqli_query($koneksi , $query_sql))  {
                header ("location:dasbord.html");
            
            } else {
                  echo "pendaftaran gagal : " . mysqli_error($koneksi);
                }
}
?>
            
           
            