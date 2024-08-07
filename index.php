<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilkan</title>
</head>
<body>
    <div class="container" style="margin:0 auto; width:50%">
        <table border="1" align="center" width="50%">
            <tr>
                <td>
                    nama
                </td>
                <td>
                    umur
                </td>
                <td>
                    aksi
                </td>
            </tr>
            <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi,'select * from siswa');
                while ($siswa = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td>
                        <?= $siswa['nama'] ?>
                    </td>
                    <td>
                        <?= $siswa['umur'] ?>
                    </td>
                    <td>
                        <a href="edit.php?nama=<?= $siswa['nama'] ?>">

                        <button type="submit">Edit</button></a>

                        <a href="proses-hapus.php?nama=<?= $siswa['nama'] ?>"><button type="submit">Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <a href="tambah-siswa.php"><button type="submit">tambah</button></a>
    </div>
</body>
</html>