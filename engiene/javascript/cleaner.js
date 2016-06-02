$(document).on("ready", clean);

function clean(){
	$(".content_cleaner").on('click', function(){
		$("#display").remove();
	});
}