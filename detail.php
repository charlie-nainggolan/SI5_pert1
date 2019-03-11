<?php
    include 'koneksi.php';
    $nim = $_GET['nim'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SI 5</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
</head>
<body>
    
    <header>
        <h1>Detail Praktikan</h1>
    </header>

    <div id="wrapper">

        <table id="detail">
            <?php 
                $sql    = "SELECT * FROM praktikan where nim='$nim'";
                $query  = mysqli_query($koneksi,$sql);
                $tampil = mysqli_fetch_array($query);
                if(empty($tampil['nilai'])){
                    $nilai = "<i>(belum diinput)</i>";
                }
                else{
                    $nilai = $tampil['nilai'];
                }
            ?>   
            <tr>
                <th>NIM</th><td><?php echo $tampil['nim'];?></td>
            </tr>
            <tr>
                <th>Nama</th><td><?php echo $tampil['nama'];?></td>
            </tr>    
            <tr>
                <th>Stambuk</th><td><?php echo $tampil['stambuk'];?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th><td><?php echo $tampil['jenis_kelamin'];?></td>
            </tr>
            <tr>
                <th>Nilai</th><td><?php echo $nilai;?></td>
            </tr>
            <tr>
                <td colspan='2'><a href="index.php">Kembali</a></td>
            </tr>        
        </table>

    </div>

</body>
</html>