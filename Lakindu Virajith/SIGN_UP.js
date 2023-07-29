// Submit Button Check
function checkButton(){
    if(document.getElementById("agree").checked){
		document.getElementById("submit").disabled = false;
	}else{
		document.getElementById("submit").disabled = true;
	}
}
// Password & Confirm Password Check
function validate(){
	var name_1 = document.getElementById("F_Name").value;
	var name_2 = document.getElementById("L_Name").value;
	var mail = document.getElementById("Email").value;
	var npsw = document.getElementById("psw").value;
	var cpsw = document.getElementById("c_psw").value;
	var mob = document.getElementById("mobile").value;

	if(name_1.length == 0 || name_2.length == 0 || mail.length == 0 || npsw.length == 0 || cpsw.length == 0 || mob.length == 0){
		alert("PLEASE FILL THE FORM");

	}else if(npsw != cpsw){
		alert("PASSWORD NOT SAME.TRY AGAIN");
		event.preventDefault()

	}else if(mob.length != 10){
		alert("INCOMPLETE MOBILE NUMBER");
		event.preventDefault()

	}else{
		alert("SIGN UP SUCCESSFUL");
		
	}
}

