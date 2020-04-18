<?php
    require 'php/functions.php';

    $buku = query("SELECT * FROM buku");
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
            <?php foreach ($buku as $b) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $b["Foto"]; ?>" width="50"></td>
                <td><?=$b ["Judul_Buku"]; ?></td>
                <td><?=$b ["Penulis"]; ?></td>
                <td><?=$b ["Penerbit"]; ?></td>
                <td><?=$b ["Harga_Buku"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>