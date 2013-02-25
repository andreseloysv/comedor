<?php
include '../../configuracion/Nucleo.php';
?>
<div id="pagina">
    <div id="banner">
        <a href="../../index.php" ><div id="banner_titulo"></div></a>
        <a href="../../index.php" ><div id="logo"></div></a>
    </div>
    <div name="menu" id="menu">
        <ul id="button">
            <li><a href="reportes.php"> Reportes</a></li>
            <li><a href="../Estudiante/agregar.php"> +Estudiante</a></li>
            <li><a href="../Trabajador/agregar.php"> +Trabajador</a></li>    
        </ul>
    </div>
    <div id="contenido">
        <div id="barra_busqueda">
            <form id="buscar_usuario" action="../../rutas.php" method="POST" >
                <label>Codigo del Carnet: </label>
                <input type="text" name="ControlAcceso_cedula" id="ControlAcceso_cedula">
                <input type="submit" value="buscar">
            </form>
        </div>
        <div id="foto"></div>
        <div id="resultado" name="resultado"></div>
    </div>
</div>