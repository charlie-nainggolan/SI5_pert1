<?php 
    $koneksi  = mysqli_connect("localhost","root","");
    $database = mysqli_select_db($koneksi,"lab_si5");

    if(!$koneksi){
        echo "Koneksi Gagal";
    }

    if(!$database){
        echo "Database Tidak Terhubung";
    }
?>