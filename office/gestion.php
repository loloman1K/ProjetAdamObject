<h1>Admin</h1>

<?php require '../vue/header.php';



$reponse = $dbh->query("SELECT * FROM filmsad");



?>
<table class='d-flex flex-column justify-content-around table table-bordered'>
    <?php
    while ($donnees = $reponse->fetch()) {

    ?>



        <tr>
            <td><?php echo $donnees['filmsad_id']; ?> </td>
            <td><?php echo $donnees['filmsad_title']; ?> </td>
            <td><?php echo $donnees['filmsad_director']; ?> </td>
            <td><?php echo $donnees['filmsad_kind']; ?> </td>
            <td><?php echo $donnees['filmsad_annee']; ?> </td>
            <td><?php echo $donnees['filmsad_duration']; ?> </td>
          
            <td> <a href="">
                    <ion-icon name="trash"></ion-icon>MODIFIEZ
                </a></td>
            <td> <a href="">
                    <ion-icon name="hammer"></ion-icon>SUPPRIMEZ
                </a></td>

        </tr>

        </article>




    <?php
    }
    ?>
</table>

<a href=" ajouter.php">
    <ion-icon name="settings"></ion-icon> AJOUTER
</a>

<?php
require 'vue/footer.php';
?>
