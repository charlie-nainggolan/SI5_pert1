<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SI 5 &middot; Admin</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
</head>
<body>
    
    <header>
        <h1>Daftar Praktikan SI 5</h1>
    </header>

    <div id="wrapper">
        
        <table border="1" id="data-tampil">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php
                $sql    = "SELECT * FROM praktikan order by nim asc";
                $query  = mysqli_query($koneksi,$sql);
                while($tampil=mysqli_fetch_array($query)){?>

            <tr>
                <td><?php echo $tampil['nim'];?></td>
                <td><?php echo $tampil['nama'];?></td>
                <td><a href="edit.php?nim=<?php echo $tampil['nim'];?>">Edit</a> |
                    <a href="hapus.php?nim=<?php echo $tampil['nim'];?>">Delete</a>
            </tr>

                    <?php
                }
            ?>
        </table>
        
        <p align="center">
                <a href="tambah.php">Tambah Praktikan</a>
        </p>

    </div>

</body>
</html>