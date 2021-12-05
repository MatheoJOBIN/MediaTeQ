<?php

require_once("modele/Manager.php");
require_once("modele/Port.php");

class LivreManager extends Livre
{
    public function get($id) //instancie un objet port
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT id, nom FROM port WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Port($donnees['id'], $donnees['nom']);
    }
  
    public function getList() //instancie une collection d'objets ports
    {
        $lesLivres = [];
        $q = $this->getPDO()->query('SELECT document.idDoc, document.titre, document.synopsis, document.empruntable, livre.ISBN, livre.auteur, document.idGenre, genre.libelle, document.idPublic, public.libelle FROM document JOIN livre ON document.idDoc = livre.idDoc JOIN genre ON document.idGenre = genre.idGenre JOIN public ON document.idPublic = public.idPublic');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $unGenre = new Genre($donnees['idGenre'], $donnees['genre.libelle']);
            $unPublic = new Publics($donnees['idPublic'], $donnees['public.libelle']);

            $lesLivres[$donnees['idDoc']] = new Livre($donnees['idDoc'], $donnees['titre'], $donnees['synopsis'], $donnees['empruntable'], $unGenre, $unPublic, $donnees['isbn'], $donnees['auteur']);
        }
        return $lesLivres;
    }

}
?>