<?php
    if(!isset($_GET ['ID'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['ID'];

    $buku = query("SELECT = FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h3>Daftar Buku</h3>
    <div class="container">
        <div class = "gambar">
            <img src="../assets/img/<?= $buku["Foto"]; ?>" alt="" width="100">
            </div>
             <div class = "keterangan">
                <p><?= $buku["judul_Buku"]; ?></p>
                <p><?= $buku["Penulis"]; ?></td>
                <p><?= $buku["Penerbit"]; ?></td>
                <p><?= $buku["Harga_Buku"]; ?></td>
            </div>
           
           <butoon class = "tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>