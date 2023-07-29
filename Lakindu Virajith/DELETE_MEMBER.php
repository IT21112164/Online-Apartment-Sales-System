<?php
	include_once '../Anushka Dilshan/CONFIG.php';
?>

<?php

        $value = $_GET['Member_ID'];

        $query = "DELETE FROM sign_up WHERE Member_ID =  '$value'";

        $data = mysqli_query($connec,$query);

        if($data){
            header("Location: GET_MEMBER.php");
        }else{
            echo "<script> alert('ERROR: RECORD NOT DELETED SUCCESSFULLY') </script>";
        }
?>