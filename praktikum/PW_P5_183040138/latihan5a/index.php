<?php
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal!");

    mysqli_select_db($conn, "pw_183040138") or die ("Database salah!");

    $result = mysqli_query($conn, "SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>

    <h3>Daftar Buku</h3>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
             <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Harga Buku</th>
            </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $row["Foto"]; ?>" width="50"></td>
                <td><?=$row ["Judul_Buku"]; ?></td>
                <td><?=$row ["Penulis"]; ?></td>
                <td><?=$row ["Penerbit"]; ?></td>
                <td><?=$row ["Harga_Buku"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>