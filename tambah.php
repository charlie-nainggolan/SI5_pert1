<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Praktikan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="tambah_proses.php" method="get">

        <table>
            <tr>
                <td>NIM</td><td><input type="text" name="nim">
            </tr>
            <tr>
                <td>Nama</td><td><input type="text" name="nama">
            </tr>    
            <tr>
                <td>Stambuk</td><td><input type="text" name="stambuk">
            </tr>
            <tr>
                <td>Jenis Kelamin</td><td>
                    <select name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
            </td></tr>
            <tr>
                <td>Nilai</td><td><input type="text" name="nilai"></td>
</tr>
            <tr>
                <td colspan="2"><input type="submit" value="Tambah"></td>
</tr>
        </table>

    </form>

</body>
</html>