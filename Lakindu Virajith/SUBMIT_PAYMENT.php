<?php
    include_once '../Anushka Dilshan/CONFIG.php';
?>

<?php

    $Name_1=$_POST["Name"];
    $Name_2=$_POST["Pay"];
    $Name_3=$_POST["M_Date"];
    $Name_4=$_POST["Y_Date"];
    $Name_5=$_POST["Code"];

    $sql = "INSERT INTO payment(ID,Name,Card_Num,Expire_Month,Expire_Year,CVV) VALUES ('','$Name_1','$Name_2','$Name_3','$Name_4','$Name_5')";

    if(mysqli_query($connec,$sql)){
        header("Location: ../Hashini Ruwanthika/HOME.html");

    }else{
        echo "<script> alert('ERROR: PAYMENT ERROR DITECTED') </script>";

    }

    mysqli_close($connec);

?>