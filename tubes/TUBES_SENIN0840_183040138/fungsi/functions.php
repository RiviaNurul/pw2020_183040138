<?php 

// function untuk koneksi ke DB

function koneksi(){
	$conn = mysqli_connect("localhost","root","root") or die("Koneksi ke DB gagal!"); mysqli_select_db($conn,"183040138_buku") or die("Data salah!");

	return $conn;
}
// end of function

// function untuk query

function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn,"$sql");

	$rows =[];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	};
	return $rows;
}

// end of function
function tambah($data){
	$conn = koneksi();

	$foto = htmlspecialchars($data['foto']);
	$judul = htmlspecialchars($data['judul']);
	$tahun = htmlspecialchars($data['tahun']);
	$penulis = htmlspecialchars($data['penulis']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$kategori = htmlspecialchars($data['kategori']);
	$harga = htmlspecialchars($data['harga']);

	$querytambah = "INSERT INTO buku
						VALUES ('$foto','$judul','$tahun','$penulis','$penerbit','$kategori','$harga')";

	mysqli_query($conn,$querytambah);

	return mysqli_affected_rows($conn);
}

function hapus($judul){
	$conn = koneksi();
	mysqli_query($conn,"DELETE FROM buku WHERE judul = $judul");

	return mysqli_affected_rows($conn);

}

function ubah($data){
	$conn = koneksi();

	$judul = $data['judul'];
	$foto = htmlspecialchars($data['foto']);
	$judul = htmlspecialchars($data['judul']);
	$tahun = htmlspecialchars($data['tahun']);
	$penulis = htmlspecialchars($data['penulis']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$kategori = htmlspecialchars($data['kategori']);
	$harga = htmlspecialchars($data['harga']);

	$queryubah = "UPDATE buku
					SET 
					foto = '$foto',
					judul = '$judul',
					tahun = '$tahun',
					penulis = '$penulis',
					penerbit = '$penerbit',
					kategori = '$kategori',
					harga = '$harga'
				  WHERE judul = '$judul' ";

	mysqli_query($conn,$queryubah);

	return mysqli_affected_rows($conn);
}

 ?>


