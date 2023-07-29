function validate()
{
    var username=document.getElementById("UN").value;
    var password=document.getElementById("PW").value;

    if(username=="AdminLog" && password=="AD@20$login")
    {
        alert("ADMIN LOGIN SUCCESSFUL");
        window.location.href = "GET_AP_INFO.php";
    }else if(username.length == 0 || password.length == 0){
        alert("INVALID LOGIN");
        event.preventDefault()
    }else if(password.length < 8 || password.length > 16 || username.length < 6){
        alert("INVALID LOGIN");
        event.preventDefault()
    }else{
        window.location.href = "../Hashini Ruwanthika/HOME.html";
    }
}