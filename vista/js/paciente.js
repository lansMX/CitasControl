function menu(var){
	$.each(var, function(i, val){
		$("#men_prin>li").after("<li><a href=''>"+val+"</a></li>");
	});
}

menu(array("Expediente", "Registro", "Ingresos"));