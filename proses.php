<?php  

	include "koneksi.php";

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$biaya = 20000;
	$order_id = rand();
	$transaction_status = 1;

	mysqli_query($koneksi, "INSERT INTO klien VALUES ('', '$nama', '$alamat', '$biaya', '$order_id', '$transaction_status', '$email' ) ");

	header("Location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id='$order_id' ");

?>