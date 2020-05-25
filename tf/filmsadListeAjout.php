<?php

require 'vue/header.php';
require 'php/fonction.php';
require 'php/bdd.php';
?>





  <div class="banni">
      <h1>Liste de l'année 2018</h1>
    </div>


<table class='d-flex flex-column justify-content-around table table-bordered' style="padding:auto; margin:10vw;">
<tr>
  <td style="border:3px solid #bbd98f;">Titre</td>
  <td style="border:3px solid #d7c095;">Réalisateur</td>
  <td style="border:3px solid #1f2c37;">Genre</td>
  <td style="border:3px solid #bbd98f;">Année</td>
  <td style="border:3px solid #d7c095;">Durée</td>
</tr>

  <?php
AfficheLastMovie2018();
   ?>
   <td> <a href="Ajouter.php">
           <button>Ajouter une référence</button>
       </a></td>

</table>



<?php

require 'vue/footer.php';

 ?>
