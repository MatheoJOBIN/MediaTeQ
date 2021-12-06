<?php

require_once("modele/Manager.php");
require_once("modele/Livre.php");

class LivreManager extends Manager
{
    public function get($id) //Récupère un objet livre
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT document.idDoc, document.titre, document.synopsis, document.empruntable, livre.ISBN, livre.auteur, document.idGenre, genre.libelle, document.idPublic, public.libelle FROM document JOIN livre ON document.idDoc = livre.idDoc JOIN genre ON document.idGenre = genre.idGenre JOIN public ON document.idPublic = public.idPublic WHERE document.id = '.$id);

        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $unGenre = new Genre($donnees['idGenre'], $donnees['genre.libelle']);
        $unPublic = new Publics($donnees['idPublic'], $donnees['public.libelle']);
        
        return new Livre($donnees['idDoc'], $donnees['titre'], $donnees['synopsis'], $donnees['empruntable'], $unGenre, $unPublic, $donnees['isbn'], $donnees['auteur']);
    }
  
    public function getList() //instancie une collection d'objets ports
    {
        $lesLivres = [];
        $q = $this->getPDO()->query('SELECT document.idDoc, document.titre, document.synopsis, document.empruntable, livre.ISBN, livre.auteur, document.idGenre, genre.libelle AS "genreLibelle", document.idPublic, public.libelle AS "publicLibelle" FROM document JOIN livre ON document.idDoc = livre.idDoc JOIN genre ON document.idGenre = genre.idGenre JOIN public ON document.idPublic = public.idPublic');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $unGenre = new Genre($donnees['idGenre'], $donnees['genreLibelle']);
            $unPublic = new Publics($donnees['idPublic'], $donnees['publicLibelle']);

            $lesLivres[$donnees['idDoc']] = new Livre($donnees['idDoc'], $donnees['titre'], $donnees['synopsis'], $donnees['empruntable'], $unGenre, $unPublic, $donnees['ISBN'], $donnees['auteur']);
        }
        return $lesLivres;
    }
}
?>