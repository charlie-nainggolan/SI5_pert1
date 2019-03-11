<?php 
    include 'koneksi.php';

    $nim        = $_GET['nim'];
   
    $sql        = "DELETE FROM praktikan where nim='$nim'";
    $query  = mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php');
    }   
    else{
        echo "Gagal";
    }
?>