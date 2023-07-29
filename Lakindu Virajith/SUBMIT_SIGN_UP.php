<?php
	include_once '../Anushka Dilshan/CONFIG.php';
?>

<?php
	$store_1 = $_POST["F_Name"];
	$store_2 = $_POST["L_Name"];
	$store_3 = $_POST["Email"];
	$store_4 = $_POST["psw"];
	$store_5 = $_POST["mobile"];
	$store_6 = $_POST["birth"];
	$store_7 = $_POST["GEN"];
	$store_8 = $_POST["addr"];

	$sql = "INSERT INTO sign_up(Member_ID,First_Name,Last_Name,Email,Password,Mobile_Number,Birth,Gender,Address)
			VALUE ('','$store_1','$store_2','$store_3','$store_4','$store_5','$store_6','$store_7','$store_8')";

	if(mysqli_query($connec,$sql)){
		header("Location: ../Chandeepa Isuranga/LOGIN.html");

	}else{
		echo "<script> alert('SERVER ERROR: NOT SUCCESSFULLY ADDED TO THE SYSTEM.PLEASE TRY AGAIN') </script>";	
	}
	
	mysqli_close($connec);
?>