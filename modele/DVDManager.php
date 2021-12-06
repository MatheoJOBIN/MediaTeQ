<?php

require_once("modele/Manager.php");
require_once("modele/DVD.php");

class DVDManager extends Manager
{
    public function get($id) //instancie un objet port
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT document.idDoc, document.titre, document.synopsis, document.empruntable, dvd.realisateur, document.idGenre, genre.libelle, document.idPublic, public.libelle FROM document JOIN dvd ON document.idDoc = dvd.idDoc JOIN genre ON document.idGenre = genre.idGenre JOIN public ON document.idPublic = public.idPublic WHERE document.id = '.$id);

        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $unGenre = new Genre($donnees['idGenre'], $donnees['genre.libelle']);
        $unPublic = new Publics($donnees['idPublic'], $donnees['public.libelle']);

        return new DVD($donnees['idDoc'], $donnees['titre'], $donnees['synopsis'], $donnees['empruntable'], $donnees['realisateur'], $unGenre, $unPublic);
    }
  
    public function getList() //instancie une collection d'objets ports
    {
        $lesDVDs = [];
        $q = $this->getPDO()->query('SELECT document.idDoc, document.titre, document.synopsis, document.empruntable, dvd.realisateur, document.idGenre, genre.libelle AS "genreLibelle", document.idPublic, public.libelle AS "publicLibelle" FROM document JOIN dvd ON document.idDoc = dvd.idDoc JOIN genre ON document.idGenre = genre.idGenre JOIN public ON document.idPublic = public.idPublic');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $unGenre = new Genre($donnees['idGenre'], $donnees['genreLibelle']);
            $unPublic = new Publics($donnees['idPublic'], $donnees['publicLibelle']);

            $lesDVDs[$donnees['idDoc']] = new DVD($donnees['idDoc'], $donnees['titre'], $donnees['synopsis'], $donnees['empruntable'], $donnees['realisateur'], $unGenre, $unPublic);
        }
        return $lesDVDs;
    }

}
?>