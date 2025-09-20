<?php

session_start();

if(!isset($_GET['logout'])){
    $_SESSION['login'] = false; //si no existe la session de login inicializamos la sesion a 0
}

//arrays de usuarios y contraseñas
$users["admin"] = "123";
$users["pepe"] = "pepe12";
$users["salah"] = "salah";

$error = 0;
$_SESSION['login'] = false;


if(isset($_POST['login'])){ //si existe el campo login dentro del formulario
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        if(isset($users[$_POST['user']])){
            if(($_POST['pass']) === $users[$_POST['user']]){
                $_SESSION['login'] = 1; // esta logueado
                $user = $_POST['user']; //se guarda para luego mostrar el usuario
            } else {
                $error = "Contraseña es incorrecta";
            }

        }else{
            $error = "El usuario no existe";
        }
    }else{
        $error = "error de usuario desconocido";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pagina web</title>
</head>
<body>
    <?php

    if(!$_SESSION['login']){ //si login esta vacio login = 0


    ?>
    <div class=div>
    <form action="login.php" method="post">
        <h2>Inicio de sesión</h2>
        <input type="text" name="user" placeholder="usuario" class=us>
        <input type="password" name="pass" placeholder="contraseña" class=con>
        <input type="submit" value="enviar" name="login" class=login>
        
    </form>
    </div>

    <?php
        }else{
                echo "<a href='login.php?logout=1'>Salir</a>";
                echo "<h2>Bienvenido. Has iniciado sesión</h2>".$user;
            
            }


        if($error){
            echo "error ".$error;
        }

    ?>
</body>
</html>