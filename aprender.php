<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleAp.css">
</head>
<body>
    
</body>
</html>

<?php

$nombre = "salah";
$apellidos = "Nasser El aslani";
$edad = 20;
$direccion = "Pasaje de Teba, Norte 18011";
?>
<div class="div">
    <?php
    echo "Hola me llamo " . $nombre . " " . $apellidos . ", tengo " . $edad . " años y 
    vivo en " . $direccion . PHP_EOL;
    ?>
</div>

<?php
$output;

if ($edad < 18){
     $output = $nombre . " es menor de edad";
}else if ($edad >= 18 && $edad <=30){
    $output = $nombre . " estas en tu prime";
}else{
    $output = $nombre . " estas en la ruina";
}

echo PHP_EOL . $output;

?>