<?php
	include_once 'CONFIG.php';
?>

<?php

$cname=$_POST["name"];
$cemail=$_POST["email"];
$num=$_POST["phoneNum"];
$msg=$_POST["massage"];

$sql = "INSERT INTO contact(Custemer_ID,Name,Email,TP,Msg) VALUES ('','$cname','$cemail','$num','$msg')";

if(mysqli_query($connec,$sql)){
	echo "<script> alert('SUCCESSFULLY!!') </script>";

}else{
	echo "<script> alert('ERROR: NOT  ADDED!') </script>";
}

mysqli_close($connec);

?>