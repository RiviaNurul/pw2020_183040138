<?php 
require '../fungsi/functions.php';

if (isset($_POST['ubah'])) {
	if (ubah($_POST)>0) {
		echo "<script>
				alert('Data Berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
	}else {
		echo "<script>
				alert('Data Gagal diubah!');
				document.location.href = 'admin.php';
			</script>";
	}
}

$id = $_GET['id'];
$hp = query("SELECT * FROM buku WHERE id =$id")[0];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data</title>
</head>
<style>
	*{
		padding: 0;
	}
	body{
		background-color: #98ae5b;
	}
	.container{
		background-color: #23313d;
		width: 500px;
		margin: 50px auto;

	}
	h3{
		padding: 30px;
		font-size: 36px;
		text-align: center;
		color: white;
		

	}
	table{
		margin:auto;
		padding-bottom: 30px;
	}
	td,th{
		padding: 5px;
		font-size: 18px;
		font-family: arial;
		font-weight: bold;
		color: white;
	}
	input{
		height: 25px;
		width: 200px;
	}
	.tombol{
		text-align: center;
		padding-bottom: 40px;
	}
	.tombol button{
		width: 60px;
		height: 30px;
		background-color: #51434e;
		color: white;

	}
</style>
<body>
	<div class="container">
		<h3>Ubah Data Buku</h3>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table border="0">
			<tr>
				<td><label for="foto">Foto </label></td>
				<td>:</td>
				<td><input type="text" name="foto" id="foto"></td>
			</tr>
			<tr>
				<td><label for="judul">Judul</label></td>
				<td>:</td>
				<td><input type="text" name="judul" id="judul"></td>
			</tr>
			<tr>
				<td><label for="tahun">Tahun  </label></td>
				<td>:</td>
				<td><input type="text" name="tahun" id="tahun"></td>
			</tr>
			<tr>
				<td><label for="penulis">Penulis </label></td>
				<td>:</td>
				<td><input type="text" name="penulis" id="penulis"></td>
			</tr>
			<tr>
				<td><label for="penerbit">Penerbit </label></td>
				<td>:</td>
				<td><input type="text" name="penerbit" id="penerbit"></td>
			</tr><tr>
				<td><label for="kategori">Kategori </label></td>
				<td>:</td>
				<td><input type="text" name="kategori" id="kategori"></td>
			</tr><tr>
				<td><label for="harga">Harga </label></td>
				<td>:</td>
				<td><input type="text" name="harga" id="harga"></td>
			</tr>
		</table>
		<div class="tombol">
			<button type="submit" name="ubah">Ubah</button>
			<a href="admin.php"><button>Kembali</button></a>
		</div>
	</form>
		
	</div>
</body>
</html>