<!DOCTYPE html>
<html>
<head>
	<title>penghuni</title>
</head>
<body>
<center>
	<h1>Data Penghuni</h1>
		<form action="creat_paket.php" method="POST">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Unit</td>
					<td>:</td>
					<td><input type="text" name="unit"></td>
				</tr>
				<tr>
					<td>No KTP</td>
					<td>:</td>
					<td><input type="text" name="noKTP"></td>
				</tr>
			</table>
		</form><br>
	<input type="submit" name="submit" value="Masukan">
</center>
</body>
</html>

<?php
include "conn.php";

session_start();

if (isset ($_POST['submit'])){
	$nama = $_POST['nama'];
	$unit = $_POST['unit'];
	$noKTP = $_POST['noKTP'];

	$masuk = mysqli_query("conn.php", "INSERT INTO pos VALUES ('$nama', '$unit', '$noKTP')");
	if ($masuk){
		header("Location:creat_paket");
	}
}
?>