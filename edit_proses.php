<?php 
    include 'koneksi.php';

    $nim        = $_GET['nim'];
    $nama       = $_GET['nama'];
    $stambuk    = $_GET['stambuk'];
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $nilai      = $_GET['nilai'];

    $sql    = "UPDATE praktikan SET nim='$nim', nama='$nama', stambuk='$stambuk', jenis_kelamin='$jenis_kelamin', nilai='$nilai' WHERE nim='$nim'";
    $query  = mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php');
    }   
    else{
        echo "Gagal";
    }
?>