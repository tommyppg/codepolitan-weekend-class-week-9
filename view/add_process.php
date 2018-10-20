<?php
	//include class
	include_once("../controller/Artikel.php");

	//instantiate class to object
	$artikel = new Artikel();

	//get form values
	$judul_artikel = $_POST['judul_artikel'];
	$isi_artikel = $_POST['isi_artikel'];
	$author_artikel = $_POST['author_artikel'];
	$id_kategori = $_POST['id_kategori'];

	$result = $artikel->insert($judul_artikel, $isi_artikel, $author_artikel, $id_kategori);

	if($result == false){
		echo "Gagal melakukan insert data";
	}else{
		header('Location: index.php');
	}
?>