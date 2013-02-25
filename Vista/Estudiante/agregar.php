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
        </div>
        <div id="foto"></div>
        <div id="resultado" name="resultado">
            <form id="agregar_usuario" action="../../rutas.php" method="POST" >
                <fieldset>
                    <legend> +Estudiante</legend>
                    <div class = "compo_fielset">
                        <label>Cedula</label>
                        <input type = "text" placeholder = "Cedula" name="cedula">
                    </div>
                    <div class = "compo_fielset">
                        <label>Nombre</label>
                        <input type = "text" placeholder = "Nombre"  name="nombre" >
                    </div>
                    <div class = "compo_fielset">
                        <label>Apellido</label>
                        <input type = "text" placeholder = "Apellido" name="apellido">
                    </div>
                    <div class = "compo_fielset">
                        <label>Correo Electronico</label>
                        <input type = "text" placeholder = "Correo Electronico" name="correo_electronico"  size="25" class="required email">
                    </div>
                    <input type="hidden" name="Modelo" value="Estudiante/agregar_estudiante">
                    <input type="submit" value="Agregar" name="enviar_formulario" 
                           id="enviar_formulario">
                </fieldset>
            </form>
        </div>
    </div>
    <div id="dialogo" name="dialogo" title="Mensaje"></div>
</div>