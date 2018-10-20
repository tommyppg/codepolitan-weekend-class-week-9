<?php
	//include class
	include_once("../controller/Artikel.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan OOP</title>
</head>
<body>
	<h1>Form Artikel Saya</h1>
	<form action="add_process.php" method="POST">
		<table>
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="judul_artikel" placeholder="judul_artikel"></td>
			</tr>
			<tr>
				<td>Isi Artikel</td>
				<td>:</td>
				<td><input type="text" name="isi_artikel" placeholder="isi_artikel"></td>
			</tr>
			<tr>
				<td>Author Artikel</td>
				<td>:</td>
				<td><input type="text" name="author_artikel" placeholder="author_artikel"></td>
			</tr>
			<tr>
				<td>ID Kategori</td>
				<td>:</td>
				<td>
					<select name="id_kategori">
						<option value="2">Politk</option>
						<option value="3">Ekonomi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="submit" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>