<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Ajouter un article</h1>

<form class="w-75" method="POST" action="Added-Article.php" style="margin:auto;">
    <div class="form-group">
        <label for="img" style="color:black;">Image réduite de l'article</label>
        <input type="text" id="picture" name="picture" class="form-control" placeholder="Renseignez le chemin de l'Image de l'article (taille réduite)">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Image taille réelle de l'article</label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" placeholder="Renseignez le chemin de l'Image de l'article (grande taille)">
    </div>
    <div class="form-group">
        <label for="dateArticle" style="color:black;">Date de l'article</label>
        <input type="date" id="dateArticle" name="dateArticle" class="form-control" placeholder="Renseignez la date de l'article">
    </div>
    <div class="form-group">
        <label for="texte" style="color:black;">texte de l'article</label>
        <input type="text" id="texte" name="texte" class="form-control" placeholder="Renseignez le chemin du texte de l'article">
    </div>
    <div class="form-group">
        <label for="text" style="color:black;">titre de l'article</label>
        <input type="text" id="titre" name="titre" class="form-control" placeholder="Renseignez le chemin du titre de l'article">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Ajouter</button>
    </div>
</form>
