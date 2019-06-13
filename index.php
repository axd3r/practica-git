<?php
$ruta = $_SERVER['DOCUMENT_ROOT'].'/mvc/';
include_once $ruta.'view/templateHeader.php';

    if(isset($_GET['s'])){
        $seccion = $_GET['s'];
        switch ($seccion){
            case 'mostrar':
                include_once $ruta.'view/mostrarPelicuclas.php';
                break;
            case 'registrar':
                include_once $ruta.'view/registrarPeliculas.php';
                break;
            default :
                echo 'Contenido Alternativo';
                break;
        }
    } else {
    echo 'Pagina Inicial';
}
include_once $ruta.'view/templateFooter.php';