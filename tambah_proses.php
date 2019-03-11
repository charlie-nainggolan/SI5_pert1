<?php 
    include 'koneksi.php';

    $nim        = $_GET['nim'];
    $nama       = $_GET['nama'];
    $stambuk    = $_GET['stambuk'];
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $nilai      = $_GET['nilai'];

    $sql    = "INSERT INTO praktikan(nim,nama,stambuk,jenis_kelamin,nilai) VALUES('$nim','$nama','$stambuk','$jenis_kelamin','$nilai')";
    $query  = mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php');
    }   
    else{
        echo "Gagal";
    }
?>