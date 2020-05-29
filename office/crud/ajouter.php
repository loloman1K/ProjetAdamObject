<?php
require '../vue/headerAdmin.php';
?>




<form action="admin/insert.php" method="post" style="text-align: center; margin-top: 3vh;">

<div class="form-group" style="text-align: center;">
    <label for="titre">Titre du film</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby=""  placeholder="Saisissez le titre du film" style="width: 30vw; margin-top: 3vh; margin-left:35vw; text-align: center;"/>
</div>
<br />
<div class="form-group" style="text-align: center;">
    <label for="titre">Réalisateur</label>
    <input type="text" class="form-control" name="director" id="director" aria-describedby=""  placeholder="Saisissez le nom du réalisateur" style="width: 30vw; margin-top: 3vh; margin-left:35vw; text-align: center;"/>
</div>
<br />
<div class="form-group" style="text-align: center;">
    <label for="titre">Catégorie</label>
    <input type="text" class="form-control" name="kind" id="kind" aria-describedby=""  placeholder="Saisissez le genre du film" style="width: 30vw; margin-top: 3vh; margin-left:35vw; text-align: center;"/>
</div>
<br />
<div class="form-group" style="text-align: center;">
    <label for="titre">Année</label>
    <input type="text" class="form-control" name="annee" id="annee" aria-describedby=""  placeholder="Saisissez l'annee de realisation du film" style="width: 30vw; margin-top: 3vh; margin-left:35vw; text-align: center;"/>
</div>
<br />
<div class="form-group" style="text-align: center;">
    <label for="titre">Durée</label>
    <input type="text" class="form-control" name="duration" id="duration" aria-describedby=""  placeholder="Saisissez la durée du film" style="width: 30vw; margin-top: 3vh; margin-left:35vw; text-align: center;"/>
</div>


</from>

<a href="scriptajout.php">
                  <button type="button" class="btn btn-primary btn-lg" style="justify-content:center;">Valider</button>
                </a>





















<?php
require '../vue/footerAdmin.php';
?>
