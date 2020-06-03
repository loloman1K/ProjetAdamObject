<?php
require '../../../identifier.php';
require '../../vueadmin/header.php';
?>

<h1>Ajouter un Portefolio</h1>

<form class="w-75" method="POST" action="Added-Portefolio.php" style="margin:auto;">
    <div class="form-group">
        <label for="picture" style="color:black;">Image réduite du Portefolio</label>
        <input type="text" id="picture" name="picture" class="form-control" placeholder="Rensignez le chemin de l'Image du Portefolio (taille réduite)">
    </div>
    <div class="form-group">
        <label for="picture" style="color:black;">Image taille réelle du Portefolio</label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" placeholder="Rensignez le chemin de l'Image du Portefolio (grande taille)">
    </div>
    <div class="form-group">
        <label for="evenement" style="color:black;">Evenement Portefolio</label>
        <input type="text" id="evenement" name="evenement" class="form-control" placeholder="Renseignez l'évenement">
    </div>
    <div class="form-group">
        <label for="lieu" style="color:black;">Lieu Portefolio</label>
        <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Où s'est déroulé l'évenement">
    </div>
    <div class="form-group">
        <label for="date" style="color:black;">Date Portefolio</label>
        <input type="date" id="date" name="date" class="form-control" placeholder="Date de l'évenement">
    </div>
    <div class="form-group">
        <label for="other" style="color:black; ">Autre</label>
        <input type="text" id="other" name="other" class="form-control" placeholder="Où s'est déroulé l'évenement">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Ajouter</button>
    </div>
</form>


<?php
require '../../../vue/footer.php';
?>