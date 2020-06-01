<?php
// session_start();
// $_SESSION['login']     = $log;
// $_SESSION['password']  = $mdp;
//
// echo var_dump($_SESSION);

require 'Session.php';


$data = Session::getInstance();

// Let's store datas in the session
$data->login = $log;
$data->password = $mdp;


//echo var_dump($data->time);

?>
