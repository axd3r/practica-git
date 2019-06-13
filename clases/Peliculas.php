<?php

class Peliculas {
 private $id;
 private $titulo;
 private $resumen;
 private $clasificacion;
 
 function getId() {
     return $this->id;
 }

 function getTitulo() {
     return $this->titulo;
 }

 function getResumen() {
     return $this->resumen;
 }

 function getClasificacion() {
     return $this->clasificacion;
 }

 function setId($id) {
     $this->id = $id;
 }

 function setTitulo($titulo) {
     $this->titulo = $titulo;
 }

 function setResumen($resumen) {
     $this->resumen = $resumen;
 }

 function setClasificacion($clasificacion) {
     $this->clasificacion = $clasificacion;
 }

function MostrarTodo(){
    $ruta = $_SERVER['DOCUMENT_ROOT'].'/Mvc/';
    include $ruta."db/db.php";
    $sql="SELECT *FROM pelicula";
    $result=$db->query($sql);
    return $result;
}
}
