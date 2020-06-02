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