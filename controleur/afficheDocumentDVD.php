<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/DVDManager.php";


$titre = "Liste des DVD";

$DVDManager = new DVDManager(); //Instanciation d'un DVDManager
$listeDVD = $DVDManager->getList(); //Récupération des DVD


// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheDocument.php";
include "$racine/vue/footer.php";
?>
<script src="js/docsearch.js"></script>

