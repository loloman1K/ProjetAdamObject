<?php


$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=Adam', $user, $pass);


$title = $_POST['title'];
$director = $_POST['director'];
$kind = $_POST['kind'];
$annee = $_POST['annee'];
$duration = $_POST['duration'];

$req = $dbh->prepare("INSERT INTO filmsad(filmsad_title, filmsad_director, filmsad_kind, filmsad_annee, filmsad_duration,) VALUES (:title, :director, :kind, :annee, :duration,)");

$req->execute(array(
    'title' => $title,
    'director' => $director,
    'kind' => $kind,
    'annee' => $annee,
    'duration' => $duration


)) or die(print_r($req->errorInfo()));

header('Location: gestion.php');
