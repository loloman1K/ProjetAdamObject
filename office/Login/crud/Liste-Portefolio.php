<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<h1>Liste des Portefolio</h1>

<a href="../LoggedIn.php?testlog=9747272180611" class="btn btn-outline-info">Retour à la page gestion</a>

<?php

$myPortefolioRepo = new PortefolioRepository($db);
?>
<section style="display:flex; flex-wrap: wrap; margin:auto; margin-top:4%;">
<?php
$portefolioTable = $myPortefolioRepo->getListName();

foreach ($portefolioTable as $Portefolios) {
    echo " <div class='card' style='width:45%;margin-bomttom:4%; margin:auto;'>
    <img src=../../../images/". $Portefolios['picture_portefolio']." width='240' class='img-fluid' style='margin:auto; margin-top:1%; margin-bottom:2%;' "."</img>
    <a class='btn btn-light' href='Affiche-OriginPicturePortefolio.php?id=".$Portefolios['id_portefolio']."'>Voir la photo en taille originale</a>
    <p> Evenement : ". $Portefolios['evenement_portefolio'] . "</p>
    <p> Lieu : ". $Portefolios['lieu_portefolio'] . "</p>
    <p> Date : ". $Portefolios['date_portefolio'] ."</p>
    <p> Autre : ". $Portefolios['other_portefolio'] ."</p>
    <a class='btn btn-outline-warning' style='margin-bottom:1%;' href='Update-Portefolio.php?id=".$Portefolios['id_portefolio']."&picture=".$Portefolios['picture_portefolio']."&originPicture=".$Portefolios['originPicture_portefolio']." &evenement=".$Portefolios['evenement_portefolio']." &lieu=".$Portefolios['lieu_portefolio']." &date=".$Portefolios['date_portefolio']." &other=".$Portefolios['other_portefolio']."'>Modifier ce Portefolio</a>
    <a class='btn btn-outline-danger' href='Delete-Portefolio.php?id=".$Portefolios['id_portefolio']."'>Supprimer ce Portefolio</a>

</div>";
}
?>
</section>