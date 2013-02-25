<?php

include '../ControladorAplicacion.php';

class TrabajadorController extends ControladorAplicacion {
    
}

$control_acceso = new ControlAccesoController();
if (method_exists($control_acceso, $_SESSION['comportamiento'])) {
    $control_acceso->$_SESSION['comportamiento']($_SESSION['campos'], $_SESSION['modelo'], $_SESSION['condiciones']);
}
?>
