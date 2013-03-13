<?php
include '../../configuracion/Nucleo.php';
?>

<?php
if (empty($_SESSION['respuesta']['error'])) {
    ?>
    <form>
        <fieldset>
    	<legend> Escuela</legend>
    	<div class = "compo_fielset">
    	    <label>Nombre</label>

    	    <select id="combobox" class="combobox">
    		<option value="">Select one...</option>
		    <?php
		    foreach ($_SESSION['respuesta']['respuesta'] as $key => $value) {
			echo('<option value="' . $value["nombre"] . '">' . $value["nombre"] . '</option>');
		    }
		    ?>
    	    </select>


    	</div>
        </fieldset>
    </form>
    <?php
} else {
    Redireccion::DireccionarVista("Error", "index");
}
?>