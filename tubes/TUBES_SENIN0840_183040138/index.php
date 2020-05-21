<?php 
require 'fungsi/functions.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['s'];
	$buku = query("SELECT * FROM buku WHERE 
		foto LIKE '%$keyword%' OR
		judul LIKE '%$keyword%' OR
		tahun LIKE '%$keyword%' OR
		penulis LIKE '%$keyword%' OR
		penerbit LIKE '%$keyword%' OR
		kategori LIKE '%$keyword%' OR
		harga LIKE '%$keyword%' ");
} else{
	$buku = query("SELECT * FROM buku");
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tugas Besar</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
	}
	.login{
		height: 50px;
		text-align: right;
		background-color: #6e8b3d;
		line-height: 50px;
		font-size: 24px;
	}
	.login a{
		font-weight: bold;
		font-family: arial;
		background-color:#23313d;
		color: white ;
	}
	.container{
		background-color: #98ae5b;
		margin:auto;
		padding-bottom: 30px;


	}
	h3{
		text-align: center;
		color: #fcd671;
		padding-top: 20px;
		padding-bottom: 40px;
		font-size: 42px;
		background-color: #23313d;
		border-radius: 70px;
		width: 800px;
		margin:auto;
	}
	table{
		margin: auto;
		text-align: center;
		background-color: #23313d;
		color: white;
		border-color: white;
	}
	a{
		text-decoration: none;
		color: white;
		padding: 10px;
	}
	td{
		padding: 10px;
		font-weight: bold;
	}
	th{
		padding: 10px;
		font-weight: bold;
		background-color: #46637b;
		color:  #f8d6fc;;
	}
	.tambah{
		margin-left: 550px;
		margin-bottom: 40px;
		padding: 10px;
		background-color: #23313d;
		color: white;
	}
	.search{ 
		width: 300px;
		height: 60px;
		margin-left:550px; 
	}
	.search input{
		height: 20px;
		width: 150px;
	}
	.search button{
		width: 40px;
		height: 30px;
		background-color: #23313d;
		color: white;
	}

</style>
<body>
	<div class="login">
		<a href="admin/login.php">Login</a>
	</div>
	<div class="container">
		<h3>Toko Buku VIA_ONE</h3>

	<a href="admin/tambah.php"><button type="submit" class="tambah">Tambah Data Buku</button></a>

	<div class="search">
		<form action="" method="get">
			<input type="text" name="s" id="s" class="form-control" placeholder="Search...">
			<button type="submit" name="cari" id="cari">Cari</button>
		</form>	
	</div>
	

	<table border="0">
		<tr>
			<th>List Buku</th>
	
		</tr>
	<?php if (empty($buku)): ?>
		<tr>
			<td colspan="7">
				<h1 align="center">Data Tidak ditemukan</h1>
			</td>
		</tr>
	<?php else : ?>
	<?php foreach ($buku as $hp):?>
		<tr>
			<td><a href="user/profile.php?id=<?= $hp['id']?>"><img src="assets/img/<?= $hp['foto']; ?>" width="100px"></a></td>
			
		</tr>
		<tr>
			<td><a href="user/profile.php?id=<?= $hp['id']?>"><?= $hp['judul']; ?></a></td>
		</tr>
	<?php endforeach ?>
<?php endif ?>
	</table>	
	</div>
	
</body>
</html>
