<?php
	//include class
	include_once("../controller/Artikel.php");

	//panggil class artikel
	$artikel = new Artikel();

	//ambil single data
	$id_artikel = $_GET['id_artikel'];
	$artikel_data = $artikel->getSingle($id_artikel);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan OOP</title>
</head>
<body>
	<h1>Form Edit Artikel Saya</h1>
	<form action="edit_process.php" method="POST">
		<table>
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="judul_artikel" placeholder="judul_artikel" value="<?php echo $artikel_data['judul_artikel'] ?>"></td>
			</tr>
			<tr>
				<td>Isi Artikel</td>
				<td>:</td>
				<td><input type="text" name="isi_artikel" placeholder="isi_artikel" value="<?php echo $artikel_data['isi_artikel'] ?>"></td>
			</tr>
			<tr>
				<td>Author Artikel</td>
				<td>:</td>
				<td><input type="text" name="author_artikel" placeholder="author_artikel" value="<?php echo $artikel_data['author_artikel'] ?>"></td>
			</tr>
			<tr>
				<td>ID Kategori</td>
				<td>:</td>
				<td>
					<select name="id_kategori">
						<option value="2" <?php echo $artikel_data['id_kategori'] == 2 ? 'selected' : '' ?>>Politk</option>
						<option value="3" <?php echo $artikel_data['id_kategori'] == 3 ? 'selected' : '' ?>>Ekonomi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_artikel" value="<?php echo $artikel_data['id_artikel'] ?>">
					<input type="submit" name="submit" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>