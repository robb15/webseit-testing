<?php
$db_host        ="localhost";
$db_user        ="root";
$db_pass        ="";
$db_name        ="db_wedding";

$koneksi        = mysqli_connect($db_host , $db_user, $db_pass , $db_name);

if (!$koneksi) {
    die("koneksi gagal:" . mysqli_connect_eror());
}