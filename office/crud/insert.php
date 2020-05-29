<?php

$user = 'root';
$pass = 'root';


$dbh = new PDO('mysql: host=localhost;dbname=Cinema', $user, $pass);

$titre = $_POST['titre'];
$genre = $_POST['genre'];
$realisateur = $_POST['realisateur'];
$annee = $_POST['annee'];
$nationalite = $_POST['nationalite'];
$duree = $_POST['duree];


$req = $bdd -> prepare ('INSERT INTO table(titre, genre, realisateur, annee, nationalite, duree) VALUES(:valeur1, :valeur2, :valeur3, :valeur4, :valeur5, :valeur6,)');


$req->execute(array(
	'valeur1' => $titre,
	'valeur2' => $genre,
    'valeur3' => $realisateur,
    'valeur4' => $annee,
    'valeur5' => $nationalite,
    'valeur6' => $duree,
	));

header('Location: index.php');
?>