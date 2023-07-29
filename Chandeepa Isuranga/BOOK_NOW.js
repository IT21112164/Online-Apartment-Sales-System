function directed(){
    
    var value1=document.getElementById("adate").value;
    var value2=document.getElementById("ddate").value;
    var value3=document.getElementById("nog").value;
    var value4=document.getElementById("Floor Number").value;
    var value5=document.getElementById("Number of Rooms").value;
    
    if(value1 != 0 && value2 != 0 && value3 != 0 && value4.length  != 13 && value5.length != 13){
        window.location.href = "../Lakindu Virajith/PAYMENT.html";
    }else{
        alert("INCOMPLETE FORM");
    }
}