<?php
include_once("Database.php");

class ArtikelModel extends Database{
	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
		//query
        $query = "select * from artikel";

		//query
        $result = $this->connection->query($query);
        
        return $result;
	}

	public function getSingle($id_artikel){
		//query
        $query = "select * from artikel where id_artikel=$id_artikel";

		//query
        $result = $this->connection->query($query);
        
        return $result;
	}
	
	public function insert($judul_artikel, $isi_artikel, $author_artikel, $id_kategori){
		//query string
        $query = "insert into artikel values(null, '$judul_artikel', '$isi_artikel', '$author_artikel', null, $id_kategori)";

		//query
        $result = $this->connection->query($query);
        
        return $result;
	}

	public function update($id_artikel, $judul_artikel, $isi_artikel, $author_artikel, $id_kategori){
		//query
		$query = "update artikel set judul_artikel='$judul_artikel', isi_artikel='$isi_artikel', author_artikel='$author_artikel', id_kategori=$id_kategori where id_artikel=$id_artikel";

		//query
        $result = $this->connection->query($query);
        
        return $result;
	}

	public function delete($id_artikel){
		//query
		$query = "delete from artikel where id_artikel=$id_artikel";
		
		//query
        $result = $this->connection->query($query);
        
        return $result;
	}
}
?>