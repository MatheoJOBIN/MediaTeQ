<label for="search_document">
	Rechercher un document dans la liste :
</label>
<input onkeyup="docsearch()" class="search_document" type="search" id="search_document">
<hr>
<?php
foreach ($listeDVD as $dvd) {
?>
	<div class="dvd" data-titre="<?= $dvd->getTitre() ?>">
		<h2>DVD : </h2>
		<u><b>ID :</b></u>
		<div class="Document_dvd_id"><?= $dvd->getId() ?></div>
		<u><b>Titre : </b></u>
		<div class="Document_dvd_titre"><?= $dvd->getTitre() ?></div>
		<u><b>Synopsis : </b></u>
		<div class="Document_dvd_synopsis"><?= $dvd->getSynopsis() ?></div>
		<u><b>Realisateur : </b></u>
		<div class="Document_dvd_realisateur"><?= $dvd->getrealisateur() ?></div>
		<u><b>Genre : </b></u>
		<div class="Document_dvd_genre"><?= $dvd->getGenre()->getLibelle() ?></div>
		<u><b>Public : </b></u>
		<div class="Document_dvd_public"><?= $dvd->getPublic()->getLibelle() ?></div>
		<hr>
	</div>
<?php
}
?>