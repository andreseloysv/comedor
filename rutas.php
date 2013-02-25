<?php

include 'configuracion/Redireccion.php';
session_start();
if (isset($_POST['Modelo'])) {
    $aux = explode("/", $_POST['Modelo']);
    $_SESSION['modelo'] = $aux[0];
    $_SESSION['comportamiento'] = $comportamiento = $aux[1];
    
    if (isset($_POST['campos'])) {
        array_pop ($_POST['campos']);
        array_pop ($_POST['campos']);
        $campos = $_POST['campos'];
    } else {
        $campos = NULL;
    }
    
    $arreglo_condiciones = array();
    $condiciones = explode(",", $aux[2]);

    foreach ($condiciones as $key => $value) {
        $aux = explode(":", $value);
        $arreglo_condiciones[$aux[0]] = $aux[1];
    }
    $_SESSION['condiciones'] = $arreglo_condiciones;
    $_SESSION['campos'] = $campos;
    Redireccion::DireccionarControlador($_SESSION['modelo']);
}
?>