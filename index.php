<?php
    include 'koneksi.php';
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
        <h1>Daftar Praktikan SI 5</h1>
    </header>

    <div id="wrapper">
        
        <table border="1" id="data-tampil">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Stambuk</th>    
            </tr>
            <?php
                $sql    = "SELECT * FROM praktikan order by nim asc";
                $query  = mysqli_query($koneksi,$sql);
                while($tampil=mysqli_fetch_array($query)){?>

            <tr>
                <td><?php echo $tampil['nim'];?></td>
                <td><a href="detail.php?nim=<?php echo $tampil['nim'];?>"><?php echo $tampil['nama'];?></a></td>
                <td><?php echo $tampil['stambuk'];?></td>
            </tr>

                    <?php
                }
            ?>
        </table>
        
        <p align="center">
                <a href="login.php">Menu Admin</a>
        </p>

    </div>

</body>
</html>