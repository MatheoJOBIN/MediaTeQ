<?php

class Document 
{
    private $id;
    private $titre;
    private $synopsis;
    private $empruntable;
    private $lesGenres;
    private $lesPublics;
    
    public function __construct($id, $titre, $synopsis, $empruntable, $lesGenres, $lesPublics) {
        $this->id = $id;
        $this->titre = $titre;
        $this->synopsis = $synopsis;
        $this->empruntable = $empruntable;
        $this-> $lesGenres = $lesGenres;
        $this-> $lesPublics = $lesPublics;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getSynopsis(){
        return $this->synopsis;
    }

    public function getEmpruntable(){
        return $this->empruntable;
    }

    public function getLesGenres(){
        return $this->lesGenres;
    }

    public function getLesPublics(){
        return $this->lesPublics;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setTitre($titre): void {
        $this->titre = $titre;
    }

    public function setSynopsis($synopsis): void {
        $this->synopsis = $synopsis;
    }

    public function setEmpruntable($empruntable): void {
        $this->empruntable = $empruntable;
    }

    public function setLesGenres($clef, $value){
        $lesGenres[$clef] = $value;
    }

    public function setLesPublics($clef, $value){
        $lesPublics[$clef] = $value;
    }
}
?>