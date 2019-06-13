<?php

$ruta = $_SERVER['DOCUMENT_ROOT'].'/Mvc/';

spl_autoload_register(function($nombre_clase){
    $directorys = array(
            'clases/',
            'controladores/'
            );
            foreach ($directorys as $directory)
            {
                $ruta = $_SERVER['DOCUMENT_ROOT'].'/Mvc/';
                if(file_exists($ruta.$directory.$nombre_clase. '.php'))
                {
                    require_once($ruta.$directory.$nombre_clase . '.php');
                }
            }

});

