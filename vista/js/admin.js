function menu(attr){
	$.each(attr, function(i, val){
		var res = (val.indexOf(" ") > 0) ? val.replace(/ /g, "").toLowerCase(): "no tiene";
		if (i == 0) {
			$("#men_prin").append("<li id='"+val.toLowerCase()+"' class='active'><a href=''>"+val+"</a></li>");
			$("div#contenido").append("<iframe src='titular/agenda.php'></iframe>");
		} else {
			$("#men_prin").append("<li id='"+val.toLowerCase()+"'><a href=''>"+val+"</a></li>");
		}
	});
}

menu(["Agenda", "Expediente", "Pacientes", "Ingresos", "Analisis de sitio"]);

$("#men_prin>li>a").click(function(e){ e.preventDefault(); });

$(document).ready(function(){
	$("#men_prin>li").click(function(e){
		//$(this).children().preventDefault();
		$("#men_prin").children().removeClass("active");
		$(this).addClass("active");
		$("div#contenido").empty();
		$("div#contenido").append("<iframe src='titular/"+$(this).attr('id')+".php'></iframe>");
	});
});