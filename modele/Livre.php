<?php

class Livre extends Document
{
    private $isbn;
    private $auteur;
    
    public function __construct($id, $titre, $synopsis, $empruntable, $lesGenres, $lesPublics, $isbn, $auteur) {
        parent::__construct($id, $titre, $synopsis, $empruntable, $lesGenres, $lesPublics);
        $this->isbn = $isbn;
        $this->auteur = $auteur;
    }

    public function getISBN(){
        return $this->isbn;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function setISBN($isbn){
        $this->isbn = $isbn;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
}
?>