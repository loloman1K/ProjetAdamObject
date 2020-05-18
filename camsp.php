<?php

require 'vue/header.php';
require 'php/fonction.php';
require 'php/bdd.php';
?>





  <div class="banni">
      <h1>CAMSP de Villeurbanne</h1>
    </div>


<aside>

                          <?php
      /* Lien vers la base de donnée table Article */

          AfficheArticleCamspHomeAside();

  ?>
</aside>
  <article>

                        <?php
    /* Lien vers la base de donnée table Article */

        AfficheArticleCamspHome();

?>

    </article>


  <article class="flexdirectionrow" >
                        <?php
    /* Lien vers la base de donnée table Article */

        AfficheArticleCamspHomeNext();



                        ?>

    </article>

</section>


<?php

require 'vue/footer.php';

 ?>
