function buscar_facultad(){    
    var values = {};
    var url='../../rutas.php';
    var metodo="Facultad/buscar_facultad/";
    data="Modelo";
    $.post(url,{
	Modelo:metodo, 
	campos:values
    }, function(data) {
	$('#contenido').append(data);
	$( "#combobox" ).combobox();
    });
        	
}