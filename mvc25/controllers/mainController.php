<?php

//cargar modelo
require_once('models/Movie.php');
require_once('models/User.php');

session_start();
//consultas a la base de datos
$db = Connection::connect();

//inicializar sesión
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = false;
}

if(isset($_GET['c'])){
    require_once('controllers/'.$_GET['c'].'Controller.php');
}
else {
    if(!($_SESSION['user'])){
    require_once('controllers/userController.php');}
    else {
        require_once('controllers/movieController.php');
    }
}