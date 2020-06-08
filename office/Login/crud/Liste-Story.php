<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<h1>Liste des Stories</h1>

<a href="../LoggedIn.php?testlog=9747272180611" class="btn btn-outline-info">Retour à la page gestion</a>

<?php

$myStoryRepo = new StoryRepository($db);
?>
<section style="display:flex; flex-wrap: wrap; margin:auto; margin-top:4%;">
<?php
$storyTable = $myStoryRepo->getListName();

foreach ($storyTable as $Stories) {
    echo " <div class='card' style='width:45%;margin-bomttom:4%; margin:auto;'>
    <img src=../../../images/". $Stories['picture_story']." width='240' class='img-fluid' style='margin:auto; margin-top:1%; margin-bottom:2%;' "."</img>
    <a class='btn btn-light' href='Affiche-OriginPictureStory.php?id=".$Stories['id_story']."'>Voir la photo en taille originale</a>
    <p> Description : ". $Stories['text_story'] . "</p>
    <p> Date : ". $Stories['date_story'] ."</p>
    <a class='btn btn-outline-warning' style='margin-bottom:1%;' href='Update-Story.php?id=".$Stories['id_story']."&picture=".$Stories['picture_story']."&originPicture=".$Stories['originPicture_story']." &text=".$Stories['text_story']." &date=".$Stories['date_story']."'>Modifier cette Story</a>
    <a class='btn btn-outline-danger' href='Delete-Story.php?id=".$Stories['id_story']."'>Supprimer cette Story</a>

</div>";
}
?>
</section>