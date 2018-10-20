<?php
	//include class
	include_once("../controller/Artikel.php");

	//instantiate class to object
	$artikel = new Artikel();

	//get form values
	$id_artikel = $_POST['id_artikel'];
	$judul_artikel = $_POST['judul_artikel'];
	$isi_artikel = $_POST['isi_artikel'];
	$author_artikel = $_POST['author_artikel'];
	$id_kategori = $_POST['id_kategori'];

	$result = $artikel->update($id_artikel, $judul_artikel, $isi_artikel, $author_artikel, $id_kategori);

	if($result == false){
		echo "Gagal melakukan update data";
	}else{
		header('Location: index.php');
	}
?>