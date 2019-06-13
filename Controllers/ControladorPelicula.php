<?php

$ruta=$_SERVER['DOCUMENT_ROOT'].'/Mvc/';
        
include $ruta."db/autoload.php";
class ControladorPelicula {
   public function mostrarPeliculas(){
       $pelicula=new Peliculas();
       return $pelicula->MostrarTodo();
   }
    
}
