<?php

require_once("modele/Document.php");
require_once("modele/Genre.php");
require_once("modele/Publics.php");

class DVD extends Document
{
    private $realisateur;
    
    public function __construct($id, $titre, $synopsis, $empruntable, $realisateur, $unGenre, $unPublic) {
        parent::__construct($id, $titre, $synopsis, $empruntable, $unGenre, $unPublic);
        $this->realisateur = $realisateur;
    }

    public function getRealisateur(){
        return $this->realisateur;
    }

    public function setRealisateur($realisateur){
        $this->realisateur = $realisateur;
    }
}
?>