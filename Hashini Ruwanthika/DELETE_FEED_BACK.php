<?php
	include_once '../Anushka Dilshan/CONFIG.php';
?>

<?php

        $value = $_GET['Custemer_ID'];

        $query = "DELETE FROM contact WHERE Custemer_ID =  '$value'";

        $data = mysqli_query($connec,$query);

        if($data){
            header("Location: GET_FEED_BACK.php");
        }else{
            echo "<script> alert('ERROR: RECORD NOT DELETED SUCCESSFULLY') </script>";
        }
?>