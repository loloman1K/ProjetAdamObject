<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<h1>Liste des articles</h1>

<a href="../LoggedIn.php?testlog=9747272180611" class="btn btn-outline-info">Retour</a>

<?php

$myArticleRepo = new ArticleRepository($db);
?>
<section style="display:flex; flex-wrap: wrap; margin:auto;">
<?php
$articleTable = $myArticleRepo->getListName();

foreach ($articleTable as $Article) {
    echo " <div class='card' style='width:45%;'>
    <p> Titre : ". $Article['title_art'] . "</p>
    <p> Page : ". $Article['page_art'] . "</p>
    <p> Texte : ". $Article['text_art'] . "</p>
    <p> Abstrait : ". $Article['abstract_art'] ."</p>
    <img src=../../../images/". $Article['picture_art']." width='320' height='200' class='img-fluid' "."</img>
    <img src=../../../images/". $Article['originPict_art']." width='320' height='200' class='img-fluid' "."</img>
    <p> Lien : ". $Article['link_art'] ."</p>
    <a class='btn btn-outline-warning' href='Update-Article.php?id=".$Article['id_art']."&picture=".$Article['picture_art']."&originPict=".$Article['originPict_art']." &title=".$Article['title_art']." &page=".$Article['page_art']." &text=".$Article['text_art']." &abstract=".$Article['abstract_art']." &link=".$Article['link_art']."'>Modifier cette article</a>
    <a class='btn btn-outline-danger' href='Delete-Article.php?id=".$Article['id_art']."'>Supprimer cet article</a>
</div>";
}
?>
</section>
