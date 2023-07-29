
function enableButton(){
	if(document.getElementById("checkditals").checked){
	document.getElementById("submit").disabled=false;
		
	}else{
		document.getElementById("submit").disabled=true;
	}
	
}