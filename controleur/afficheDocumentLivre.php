<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/LivreManager.php";


$titre = "Liste des livres";

$livreManager = new LivreManager(); //instanciation d'un livreManager
$listeLivre = $livreManager->getList(); //Récupération des livres


// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheDocumentLivre.php";
include "$racine/vue/footer.php";
?>
<script src="js/docsearchLivre.js"></script>

