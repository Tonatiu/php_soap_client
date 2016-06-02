$(document).on("ready", start);

function start(){
	$("#validate_btn").click(validate);
}

function validate(){
	var boleta_regex = new RegExp('[0-9]{10,10}');
	var password_regex = new RegExp('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$');
	
	var boleta = document.getElementById("student_boleta").value;
	var passwd = document.getElementById("student_passwd").value;
	
	
	if(boleta.length == 0 || boleta == null || !boleta_regex.test(boleta)){
		$("#student_boleta").parent().parent().attr("class", "form-group has-error");
	}
	else{
		$("#student_boleta").parent().parent().attr("class", "form-group has-success");
	}
}