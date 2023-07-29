<?php
	include_once '../Anushka Dilshan/CONFIG.php';
?>
<?php

	if(isset($_POST['Submit'])){

        $username = $_POST['UN'];
        $password = $_POST['PW'];

        $sql = "SELECT * FROM sign_up 
                WHERE Email= '$username' AND Password= '$password'
                LIMIT 1";

        $result_set = mysqli_query($connec, $sql);

        if(mysqli_num_rows($result) == 1){
            echo "<script> alert('LOGIN SUCCESSFUL') </script>";
            header("Location: ../Hashini Ruwanthika/HOME.html.html");
        }else{
            echo "<script> alert('INVALID LOGIN') </script>";
            header("Location: LOGIN.html");
        }
    }
?>