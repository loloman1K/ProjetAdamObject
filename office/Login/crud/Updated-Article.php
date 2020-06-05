<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>L'article a été modifié</h1>

<?php

$id = $_POST['id'];
$picture = $_POST['picture'];
$originPict = $_POST['originPicture'];
$titre = $_POST['titre'];
$page = $_POST['page'];
$text = $_POST['texte'];
$abstract = $_POST['abstract'];
$link = $_POST['link'];

$articleTable = array(
    "id_art" => $id,
    'title_art' => $titre,
    'page_art' => $page,
    'text_art' => $text,
    'abstract_art' => $abstract,
    "picture_art" => $picture,
    'originPict_art' => $originPict,
    'link_art' => $link);

  $myArticle = new Article($articleTable);
//echo var_dump($myArticle);
  $myArticleRepo = new ArticleRepository($db);

$myArticleRepo->update($myArticle);

?>

<form class="w-75" style="margin:auto;">
<div class="form-group">
<input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="titre" style="color:black;">Titre d'article</label>
        <input type="text" id="titre" name="titre" class="form-control"value="<?php echo $titre ?>">
    </div>

    <div class="form-group">
        <label for="img" style="color:black;">Chemin de l'article</label>
        <input type="text" id="picture" name="picture" class="form-control" value="<?php echo $picture ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Chemin de l'article (grande taille) </label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" value="<?php echo $originPict ?>">
    </div>
    <div class="form-group">
        <label for="text" style="color:black;">Texte de l'article</label>
        <input type="text" id="text" name="text" class="form-control"value="<?php echo $text ?>">
    </div>
    <div class="form-group">
        <label for="page" style="color:black;">Page</label>
        <input type="text" id="page" name="page" class="form-control" value="<?php echo $page ?>">
    </div>
    <div class="form-group">
        <label for="abstract" style="color:black;">Abstrait</label>
        <input type="text" id="abstract" name="abstract" class="form-control" value="<?php echo $abstract ?>">
    </div>
    <div class="form-group">
        <label for="link" style="color:black; ">Lien</label>
        <input type="text" id="link" name="link" class="form-control" value="<?php echo $link ?>">
    </div>
