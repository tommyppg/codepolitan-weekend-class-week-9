<?php
	//include class
	include_once("../controller/Artikel.php");

	//instantiate class to object
	$artikel = new Artikel();

	//get form values
	$id_artikel = $_GET['id_artikel'];

	$result = $artikel->delete($id_artikel);

	if($result == false){
		echo "Gagal melakukan delete data";
	}else{
		header('Location: index.php');
	}
?>