<?php  

	include "koneksi.php";

	$id = $_GET['id'];

	$query = "SELECT * FROM klien WHERE id = '$id' ";

	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);

	$query2 = "DELETE FROM klien WHERE id = '$id' ";
	$sql2 = mysqli_query($koneksi, $query2);

	if ($sql2) {
		header("Location:data.php");
	} else {
		echo "Gagal <a href='data.php'> Kembali </a>";
	}

?>