<?php

//Incluyo los archivos necesarios
require("./model/Coche.php");
require("./controller/CocheController.php");

//Instancio el controlador
$controller = new CocheController;

if (isset($_GET['ver'])) {
    $controller->ver($_GET['ver']);
} else {
    //Ejecuto el método
    $controller->listado();
}