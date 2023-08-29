<?php  
	
	require_once 'koneksi.php';

	error_reporting(0);

	$getDataKlien = mysqli_query($koneksi, "SELECT * FROM klien ORDER BY id ASC");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Pembayaran </title>
</head>
<body>

	<h1> Data Pembayaran </h1>

	<table border="1">
		<thead>
			<tr>
				<th> No </th>
				<th> Nama Lengkap </th>
				<th> Alamat </th>
				<th> Biaya </th>
				<th> Order ID </th>
				<th> Status </th>
				<th> Email </th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($getDataKlien as $data_klien ): ?>
				<tr>
					<td> <?= $no++; ?> </td>
					<td> <?= $data_klien['nama']; ?> </td>
					<td> <?= $data_klien['alamat']; ?> </td>
					<td> <?= $data_klien['biaya']; ?> </td>
					<td> <?= $data_klien['order_id']; ?> </td>
					<?php if ($data_klien['transaction_status'] == 1): ?>
						<td> <strong> Pembayaran Belum Dilakukan </strong> </td>
					<?php elseif( $data_klien['transaction_status'] == 2 ): ?>
						<td> <strong> Pembayaran Pending </strong> </td>
					<?php else: ?>
						<td> <strong> Pembayaran Sukses </strong> </td>
					<?php endif; ?>
					<td> <?= $data_klien['email']; ?> </td>
					<td>
						<a href="hapus.php?id=<?= $data_klien['id']; ?>"> Hapus </a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>