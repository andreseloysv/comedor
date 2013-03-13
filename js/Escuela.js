function buscar_escuela(){    
    var values = {};
    var url='../../rutas.php';
    var metodo="Escuela/buscar_escuela/";
    data="Modelo";
    $.post(url,{
	Modelo:metodo, 
	campos:values
    }, function(data) {
	$('#contenido').append(data);
	$( "#combobox" ).combobox();
    });
        	
}