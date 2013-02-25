
$(document).ready(function() {
    countdown=0; //constante que sirve para reiniciar el contador en #timer
    $('#buscar_usuario').submit(function() {
	buscar_usuario();  
	return false;
    });
    $('#ControlAcceso_cedula').on('keyup',function(){
	buscar_usuario();  
    });
    
    $('#agregar_usuario').submit(function() {    
	if ($("#agregar_usuario").valid()) {
	    agregar_usuario($('#agregar_usuario :input'));
	}
	return false;
    });
});
function conteo_regresivo(url){
    $(function(){
	count =3;
	clearInterval(countdown);
	countdown = setInterval(function(){
	    $("#timer").html("Redireccionando en: "+count);
	    if(count <= 0){
		clearInterval(countdown);
		window.location = url;
	    }
	    count --;
	}, 1000);
    });
}
function buscar_usuario(){
    var cedula=$("#ControlAcceso_cedula").val();
    var url='../../rutas.php';
    var metodo="ControlAcceso/buscar_usuario/cedula:"+cedula;
    data="Modelo";
    $.post(url,{
	Modelo:metodo
    }, function(data) {
	$('#resultado').html(data);
	if ($('#contenido_error').val()!=undefined){
	    timer = document.createElement('div');
	    timer.id="timer";
	    $('#resultado').append(timer);
	    conteo_regresivo("http://127.0.0.1/comedor/Vista/Estudiante/agregar.php");
	}
    });
    
}

function carga_dialogo(){
    $( "#dialogo" ).dialog({
	modal: true,
	buttons: {
	    Ok: function() {
		$( this ).dialog( "close" );
	    }
	}
    });
}