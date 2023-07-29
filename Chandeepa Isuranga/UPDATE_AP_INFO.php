<?php
	include_once '../Anushka Dilshan/CONFIG.php';
?>

<?php
	$value_1 = $_GET['Ap_ID'];
    $value_2 = $_GET['Floor_No'];
    $value_3 = $_GET['Rooms'];
    $value_4 = $_GET['Bathrooms'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="../Hashini Ruwanthika/ADMIN_NAV.css">
    <link rel="stylesheet" href="../Lakindu Virajith/NAVIGATION.css">
    <link rel="stylesheet" href="../Lakindu Virajith/BACK_BUTTON.css">
    <script type="text/javascript" src="../Anushka Dilshan/BACK_BUTTON.js"></script>
</head>
<body>

    <header>
        <!-- Header -->
        <h1 id="header">ADMIN PAGE</h1>

        <!-- Navigation Bar -->
        <ul id="n_bar">
            <li ><a href="../Chandeepa Isuranga/GET_AP_INFO.php">APARTMENT</a></li>
            <li ><a href="../Lakindu Virajith/GET_MEMBER.php">MEMBERS</a></li>
            <li ><a href="../Hashini Ruwanthika/GET_FEED_BACK.php">FEED BACK</a></li>
            <li ><a href="../Nipunika Sathsarani/GET_PAYMENT.php">PAYMENT</a></li>
        </ul>

        <button id="back_b" onclick="goBack()">BACK</button></a>

        <hr></hr>
    </header>

    <form action="" method="GET">
        <table border="4px" align="center">

            <tr>
                <td>Apartment ID</td>
                <td><input type="text" value="<?php echo "$value_1" ?>" name="A_1"></td>
            </tr>
            <tr>
                <td>Floor No</td>
                <td><input type="text" value="<?php echo "$value_2" ?>" name="A_2"></td>
            </tr>
            <tr>
                <td>No of Rooms</td>
                <td><input type="text" value="<?php echo "$value_3" ?>" name="A_3"></td>
            </tr>
            <tr>
                <td>No of Bathrooms</td>
                <td><input type="text" value="<?php echo "$value_4" ?>" name="A_4"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="submit" id="sub"></td>
            </tr>

        </table>
    </form>


</body>
</html>

<?php
    if($_GET['submit']){

        $value_5 = $_GET['A_1'];
        $value_6 = $_GET['A_2'];
        $value_7 = $_GET['A_3'];
        $value_8 = $_GET['A_4'];

        $query = "UPDATE ap_info SET Ap_ID ='$value_5', Floor_No ='$value_6', Rooms ='$value_7', Bathrooms ='$value_8'";

        $data = mysqli_query($connec,$query);

        if($data){
            header("Location: GET_AP_INFO.php");
        }else{
            echo "<script> alert('ERROR: RECORD NOT UPDATED SUCCESSFULLY') </script>";
        }
}
?>