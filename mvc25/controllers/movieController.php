<?php


//accion ver peli
if(isset($_GET['id'])){
    $info=false;
    $q="SELECT * FROM movie WHERE id=".$_GET['id'];
    $result = $db->query($q);
    if ($row = $result->fetch_assoc()) {
        $movie = new Movie($row['id'], $row['title'], $row['year'], $row['director']);
    }
    else {
        $info="Pelicula no encontrada";
    }

    require_once 'views/showMovie.phtml';
}
//accion ver listado
else {
$q="SELECT * FROM movie";
$result = $db->query($q);
while ($row = $result->fetch_assoc()) {
    $movies[] = new Movie($row['id'], $row['title'], $row['year'], $row['director']);
}

require_once 'views/mainView.phtml';

}