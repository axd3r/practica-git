<?php

$ruta = $_SERVER['DOCUMENT_ROOT'].'/Mvc/';
include $ruta.'Controllers/ControladorPelicula.php';

$controladorPelicula = new ControladorPelicula();
$peliculas = $controladorPelicula->mostrarPeliculas();
foreach ($peliculas as $pelicula){
    echo "Titulo: ".$pelicula["titulo"]."<br>".
         "Resumen: ".$pelicula["resumen"]."<br>".
         "Clasificacion: ".$pelicula["clasificacion"];
}