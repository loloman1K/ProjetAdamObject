<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
//$_SESSION["newsession"]=$value;
$_SESSION['login']     = $log;
$_SESSION['password']  = $mdp;

echo var_dump($_SESSION);
?>
