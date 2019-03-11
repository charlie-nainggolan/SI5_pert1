<?php
    include 'koneksi.php';
    $nim = $_GET['nim'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Praktikan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="edit_proses.php" method="get">

    <?php
        $sql    = "SELECT * FROM praktikan where nim='$nim'";
        $query  = mysqli_query($koneksi,$sql);
        $tampil = mysqli_fetch_array($query);

    ?>

        <table>
            <tr>
                <td>NIM</td><td><input type="text" name="nim" value="<?php echo $tampil['nim'];?>">
            </tr>
            <tr>
                <td>Nama</td><td><input type="text" name="nama" value="<?php echo $tampil['nama'];?>">
            </tr>    
            <tr>
                <td>Stambuk</td><td><input type="text" name="stambuk" value="<?php echo $tampil['stambuk'];?>">
            </tr>
            <tr>
                <td>Jenis Kelamin</td><td>
                    <select name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin'];?>">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
            </td></tr>
            <tr>
                <td>Nilai</td><td><input type="text" name="nilai" value="<?php echo $tampil['nilai'];?>"></td>
</tr>
            <tr>
                <td colspan="2"><input type="submit" value="Edit"></td>
</tr>
        </table>

    </form>

</body>
</html>