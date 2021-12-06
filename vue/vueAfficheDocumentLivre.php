<label for="search_document">
	Rechercher un document dans la liste : 
</label>
<input onkeyup="docsearch()" class="search_document" type="search" id="search_document">
<hr>

<?php
foreach ($listeLivre as $livre) {
?>
<div class="livre" data-id="" data-titre="<?= $livre->getTitre() ?>">
	<h2>Livre : </h2>
	<u><b>ID :</b></u>
	<div class="Document_livre_id"><?= $livre->getId() ?></div>
	<u><b>Titre : </b></u>
	<div class="Document_livre_titre"><?= $livre->getTitre() ?></div>
	<u><b>Synopsis : </b></u>
	<div class="Document_livre_synopsis"><?= $livre->getSynopsis() ?></div>
	<u><b>ISBN : </b></u>
	<div class="Document_livre_isbn"><?= $livre->getISBN() ?></div>
	<u><b>Auteur : </b></u>
	<div class="Document_livre_auteur"><?= $livre->getauteur() ?></div>
	<u><b>Genre : </b></u>
	<div class="Document_livre_genre"><?= $livre->getGenre()->getLibelle() ?></div>
	<u><b>Public : </b></u>
	<div class="Document_livre_public"><?= $livre->getpublic()->getlibelle() ?></div>
	<hr>
</div>
<?php
}
?>