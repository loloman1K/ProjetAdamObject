<?php require 'vue/header.php'; ?>
<div class="container-fluid">

<h1 style='margin-top: 3vh;'>Gestion de contenu du site Pour les yeux de Adam </h1>


<form method="POST" action="php/logadmin.php" class="w-50 " style='margin-left:auto; margin-right:auto; margin-top: 20vh;'>
    <div class="form-group">
        <label for="log">Login</label>
        <input type="text" class="form-control" id="log" name="login" aria-describedby="emailHelp" placeholder="Votre login">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-outline-success">Se connecter</button>
</form>
</div>
<?php require 'vue/footer.php'; ?>
