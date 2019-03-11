<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin where username='$username' AND password='$password'";
    $query = mysqli_query($koneksi,$sql);
    $row = mysqli_num_rows($query);
    if($row > 0){
        header('location: admin.php');
    }
    else{
        echo "Login Gagal";    
    }
?>