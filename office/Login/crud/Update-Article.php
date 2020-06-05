<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<?php
$id =  $_GET['id'];
$titre =  $_GET['title'];
$page =  $_GET['page'];
$texte =  $_GET['text'];
$abstract =  $_GET['abstract'];
$link =  $_GET['link'];
$picture =  $_GET['picture'];
$originPicture =  $_GET['originPict'];

?>

<h1>Modifier un article</h1>

<form class="w-75" method="POST" action="Updated-Article.php" style="margin:auto;">
    <div class="form-group">
        <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="titre" style="color:black;">titre de l'article</label>
        <input type="text" id="titre" name="titre" class="form-control" placeholder="Renseignez le chemin du titre de l'article" value="<?php echo $titre ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Image réduite de l'article</label>
        <input type="text" id="picture" name="picture" class="form-control" placeholder="Renseignez le chemin de l'Image de l'article (taille réduite)" value="<?php echo $picture ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Image taille réelle de l'article</label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" placeholder="Renseignez le chemin de l'Image de l'article (grande taille)" value="<?php echo $originPicture ?>">
    </div>
    <div class="form-group">
        <label for="page" style="color:black;">Page de l'article</label>
        <input type="text" id="page" name="page" class="form-control" placeholder="Renseignez la page de l'article" value="<?php echo $page ?>">
    </div>
    <div class="form-group">
        <label for="texte" style="color:black;">texte de l'article</label>
        <input type="text" id="texte" name="texte" class="form-control" placeholder="Renseignez le chemin du texte de l'article" value="<?php echo $texte ?>">
    </div>
    <div class="form-group">
        <label for="abstract" style="color:black;">abstract de l'article</label>
        <input type="text" id="abstract" name="abstract" class="form-control" placeholder="Renseignez le chemin du texte de l'article" value="<?php echo $abstract ?>">
    </div>
    <div class="form-group">
        <label for="link" style="color:black;">lien de l'article</label>
        <input type="text" id="link" name="link" class="form-control" placeholder="Renseignez le chemin du texte de l'article" value="<?php echo $link ?>">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Modifier</button>
    </div>
</form>
