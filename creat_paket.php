<!DOCTYPE html>
<html>
<head>
	<title>create_paket</title>
</head>
<body>
<center>
	<h1>DATA PAKET MASUK</h1>
		<form action="list_paket.php">
			<table>
				<tr>
					<td>Telah terima dari no.KTP</td>
					<td>:</td>
					<td><input type="text" name="noKTP"></td>
				</tr>
				<tr>
					<td>NIP Penerima</td>
					<td>:</td>
					<td><input type="text" name="nip"></td>
				</tr>
				<tr>
					<td>Tanggal datang</td>
					<td>:</td>
					<td><input type="date" name="tgl_datang"></td>
				</tr>
				<tr>
					<td>Tanggal ambil</td>
					<td>:</td>
					<td><input type="date" name="tgl_ambil"></td>
				</tr>
			</table>
		</form><br>
	<input type="submit" name="submit" value="Masukan">
</center>
</body>
</html>