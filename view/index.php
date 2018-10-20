<?php
	//include class
	include_once("../controller/Artikel.php");

	//instantiate class to object
	$artikel = new Artikel();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan OOP</title>
</head>
<body>
	<h1>Daftar Artikel Saya</h1>
	<a href="add.php">Tambah Artikel</a><br/><br/>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Author</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$artikel_data = $artikel->getAll();

				if(count($artikel_data) > 0){
					foreach($artikel_data as $key => $data){
						?>
						<tr>
							<td><?php echo $key+1; ?></td>
							<td><?php echo $data['judul_artikel'] ?></td>
							<td><?php echo $data['author_artikel'] ?></td>
							<td>
								<a href="edit.php?id_artikel=<?php echo $data['id_artikel']; ?>">Edit</a> | 
								<a href="delete_process.php?id_artikel=<?php echo $data['id_artikel']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				}else{
					?>
					<tr>
						<td colspan="4">Tidak ada data</td>
					</tr>
					<?php
				}
				
			?>
		</tbody>
	</table>
</body>
</html>