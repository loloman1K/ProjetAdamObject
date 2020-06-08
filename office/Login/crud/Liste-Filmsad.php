<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<h1>Liste des films audio</h1>

<a href="../LoggedIn.php?testlog=9747272180611" class="btn btn-outline-info">Retour</a>

<?php

$myFilmsadRepo = new FilmsadRepository($db);
?>
<section style="display:flex; flex-wrap: wrap; margin:auto;">
<?php
$filmsadTable = $myFilmsadRepo->getListName();

foreach ($filmsadTable as $Filmsad) {
    echo " <div class='card' style='width:45%;'>
    <p> Titre : ". $Filmsad['title_film'] . "</p>
    <p> Director : ". $Filmsad['director_film'] . "</p>
    <p> Kind : ". $Filmsad['kind_film'] . "</p>
    <p> Année : ". $Filmsad['annee_film'] ."</p>
    <p> Duration : ". $Filmsad['duration_film'] ."</p>
    <a class='btn btn-outline-warning' href='Update-Filmsad.php?id=".$Filmsad['id_film']."&title=".$Filmsad['title_film']."&director=".$Filmsad['director_film']." &kind=".$Filmsad['kind_film']." &annee=".$Filmsad['annee_film']." &duration=".$Filmsad['duration_film']."'>Modifier ce film audio</a>
    <a class='btn btn-outline-danger' href='Delete-Filmsad.php?id=".$Filmsad['id_film']."'>Supprimer ce film audio</a>
</div>";
}
?>
</section>
