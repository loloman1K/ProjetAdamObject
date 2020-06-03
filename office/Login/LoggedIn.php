<?php

require '../vueadmin/header.php';

if (isset($_GET['testlog'])){
    if($_GET['testlog']==9747272180611 ){
      if (!isset($_SESSION['admin'])) {
        echo "You are logged in !";
?>

<div class="container-fluid">

<h1 style='margin-top: 3vh;'>Vous êtes connecté.e sur le site Pour les yeux d'Adam </h1>

</div>

<a href="LogOut.php" class="btn btn-outline-danger">Déconnexion</a>

<section class="card-wrapper">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Portefolio</h5>
    <a href="crud/Add-Portefolio.php" class="btn btn-outline-primary">Ajouter un Portefolio</a>
  </div>
</div>

<div class="card" style="width: 18rem;margin-left:10vw;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Story</h5>
    <a href="crud/%Add-Story%.php" class="btn btn-outline-primary">Ajouter une Story</a>
  </div>
</div>
</section>

<?php 
}
else {
  echo "You are not logged in !";
}

require '../vueadmin/footer.php';
}
else{
  header('Location: LoggedIn.php');
}
}
else{
  header('Location: LoginForm.php');
}
?>




