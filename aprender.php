<?php
$name = "Salah";
$age = 20;

var_dump($name);
var_dump($age);
echo gettype($name);

$output = "Hola $name. Tienes $age años";
$frase = "el tipo de variable $name es ". gettype($name);
echo $frase;


define("PI", 3.14); //para las constantes
const NOMBRE = "Salah";
$isOld = $age >= 18;

?>

<h2>
    <?= $output ?>
</h2>
<h2>
    <?= $frase ?>
</h2>