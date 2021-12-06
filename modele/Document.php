<?php

class Document
{
    private $id;
    private $titre;
    private $synopsis;
    private $empruntable;
    private $unGenre;
    private $unPublic;

    public function __construct($id, $titre, $synopsis, $empruntable, $unGenre, $unPublic)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->synopsis = $synopsis;
        $this->empruntable = $empruntable;
        $this->unGenre = $unGenre;
        $this->unPublic = $unPublic;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function getEmpruntable()
    {
        return $this->empruntable;
    }

    public function getGenre()
    {
        return $this->unGenre;
    }

    public function getPublic()
    {
        return $this->unPublic;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }

    public function setEmpruntable($empruntable)
    {
        $this->empruntable = $empruntable;
    }

    public function setGenre($unGenre)
    {
        $this->unGenre = $unGenre;
    }

    public function setPublic($unPublic)
    {
        $this->unPublic = $unPublic;
    }
}
