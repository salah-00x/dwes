<?php

//logout
if(isset($_GET['logout'])){
    $_SESSION['user']=false;
    header('location:index.php');
}

//login
if(isset($_POST['username']) && isset($_POST['password'])){
    $q='SELECT * FROM user WHERE username="'.$_POST['username'].'" AND password="'.md5($_POST['password']).'"';

    $result = $db->query($q);

    if($row=$result->fetch_assoc()){
        $_SESSION['user'] = new User($row['id'], $row['username']);
        header('location:index.php');
    }

}

//vista por defecto
if(!$_SESSION['user']){
    require_once('views/loginView.phtml');
    exit;
}