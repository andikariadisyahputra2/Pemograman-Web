<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widtth, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
</head>
<body>
    <table border="1">
        <caption>
            Biodata Mahasiswa
            <a href="form-tambah.php">Tambah Mahasiswa</a>
        </caption>
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
        <?php
        $query = "SELECT * FROM  biodata order by npm ASC";
        $result = $mysqli->query($query);
        $no=8;
        while($row = $result->fetch_assoc()){
            $no++;
            ?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $row['npm'];?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['prodi'];?></td>
                <td>
                    <a href="<?='form-edit.php?id=' .4row['id'];?>">EDIT</a>
                    
                    <a href="">Hapus</a>

                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>4
