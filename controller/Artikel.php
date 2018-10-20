<?php
include_once("../model/ArtikelModel.php");

class Artikel{
    private $artikelModel;
    
    public function __construct(){
        //pakai artikel model
        $this->artikelModel = new ArtikelModel();
    }
    
    public function getAll(){
        //query
        $result = $this->artikelModel->getAll();
        
        //cek jika kosong
        if ($result == false) {
            return false;
        }
        
        //siapkan artikel data
        $artikel_data = array();
        
        //masukan data ke $artikel_data
        while ($artikel = $result->fetch_array()) {
            $artikel_data[] = $artikel;
        }
        
        return $artikel_data;
    }
    
    public function getSingle($id_artikel){
        //query
        $result = $this->artikelModel->getSingle($id_artikel);

        //masukan hasil ke sebuah variabel
        $artikel_data = $result->fetch_array();

        return $artikel_data;
    }
    
    public function insert($judul_artikel, $isi_artikel, $author_artikel, $id_kategori){
        //query
        $result = $this->artikelModel->insert($judul_artikel, $isi_artikel, $author_artikel, $id_kategori);

        //return hasil query
        return $result;
    }
    
    public function update($id_artikel, $judul_artikel, $isi_artikel, $author_artikel, $id_kategori){
        //query
        $result = $this->artikelModel->update($id_artikel, $judul_artikel, $isi_artikel, $author_artikel, $id_kategori);

        //return hasil query
        return $result;
    }
    
    public function delete($id_artikel){
        //query
        $result = $this->artikelModel->delete($id_artikel);
        
        //return hasil query
        return $result;
    }
}
?>