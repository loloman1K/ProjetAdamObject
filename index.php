<?php

require 'vue/header.php';
require 'php/fonction.php';
require 'php/bdd.php';
?>





  <div class="banni">
      <h1>Pour les yeux d'Adam</h1>
    </div>

      <div class="block1">
        <img class="pictintroduction" src="data/naissanceAdam.jpg" title="Moi avec mon fils le jour de sa naissance " alt="le Papa d'Adam avec Adam le jour de sa naissance">
            <div class="block2">
                <h2>Introduction :</h2>
                      <p classe="p">
                            Ce site est dédié à mon fils Adam, Aveugle de naissance et malgré les opérations chirurgicale sa cécité n’a pas évolué elle reste Totale.<br/>
    Avec son parcourt atypique, je décide de partagé nos information et l’évolution de notre fils, afin d’aider les familles vivant la même situation et échanger le cas échéances sur les meilleur pratiques facilitant la vie de personnes atteint par cette pathologie.
<br/>
    Pour information nous avons des jumeaux, une fille n’ayant aucun ennuie de santé et notre fils atteint de cécité à la naissance. Ils sont nés en février 2018.
                        </p>
                      </div>
                    </div>
<section>
<article>
                    <?php
/* Lien vers la base de donnée table Article */
          AfficheArticleHome($id=1);
                    ?>

</article>
</section>



<?php

require 'vue/footer.php';

 ?>
