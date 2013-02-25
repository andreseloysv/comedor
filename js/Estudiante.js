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

function agregar_usuario($inputs){    
    var values = {};
    $inputs.each(function() {
	values[this.name] = $(this).val();
    });
    var url='../../rutas.php';
    var metodo="Estudiante/agregar_estudiante/";
    data="Modelo";
    $.post(url,{
	Modelo:metodo, 
	campos:values
    }, function(data) {
	$('#dialogo').html(data);
	
	    timer = document.createElement('div');
	    timer.id="timer";
	    $('#dialogo').append(timer);
	    conteo_regresivo("http://127.0.0.1/comedor/Vista/ControlAcceso/");
	
	carga_dialogo();
    });
}