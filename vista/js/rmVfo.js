function rmVfo(){

}

function desMask(){
	$("input[type='password']").append("<span id='dismask' class='glyphicon glyphicon-eye-open'></span>");
}

$("#dismask").click(function(e){
	var inputCh = $e.prev();
	$inputCh.attr("type", "text");
});