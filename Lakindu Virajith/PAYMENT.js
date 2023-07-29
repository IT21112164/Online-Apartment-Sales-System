function validatepay(){
	var value_1 = document.getElementById("Name").value;
	var value_2 = document.getElementById("Pay").value;
	var value_3 = document.getElementById("M_Date").value;
	var value_4 = document.getElementById("Y_Date").value;
	var value_5 = document.getElementById("Code").value;

	if(value_1.length == 0 || value_2.length == 0 || value_3.length == 0 || value_4.length == 0 || value_5.length == 0 ){
		alert("PLEASE FILL THE FORM");

    }else if(value_2.length < 16){
        alert("INCOMPLETE CARD NUMBER");
        event.preventDefault()

    }else if(value_3 > 12){
        alert("INVALID EXPIRE MOUNTH");
        event.preventDefault()

    }else if(value_4 < 2021){
        alert("INVALID EXPIRE YEAR");
        event.preventDefault()

    }else if(value_5.length != 3){
        alert("INCOMPLETE CVV NUMBER");
        event.preventDefault()

    }else{
		alert("PAYMENT SUCCESSFUL");
        
	}
}