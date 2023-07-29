<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="../Hashini Ruwanthika/ADMIN_NAV.css">
    <link rel="stylesheet" href="../Lakindu Virajith/NAVIGATION.css">
    <link rel="stylesheet" href="../Lakindu Virajith/BACK_BUTTON.css">
</head>
<body>

    <header>
        <!-- Header -->
        <h1 id="header">ADMIN PAGE</h1>

        <!-- Navigation Bar -->
        <ul id="n_bar">
            <li ><a href="#">APARTMENT</a></li>
            <li ><a href="../Lakindu Virajith/GET_MEMBER.php">MEMBERS</a></li>
            <li ><a href="../Hashini Ruwanthika/GET_FEED_BACK.php">FEED BACK</a></li>
            <li ><a href="../Nipunika Sathsarani/GET_PAYMENT.php">PAYMENT</a></li>
        </ul>

        <a id="go" href="../Hashini Ruwanthika/HOME.html">
        <button id="back_b">USER MODE</button></a>

        <hr></hr>
    </header>

    <!-- Feed Back Table -->
    <br><br>
    <table border="4px" width="100%">
        <tr>
            <th class="row">Apartment ID</th>
            <th class="row">Floor No</th>
            <th class="row">No of Rooms</th>
            <th class="row">No of Bathrooms</th>
            <th class="row">Edit</th>
        </tr>

    <!-- PHP Connect -->
    <?php
	include_once '../Anushka Dilshan/CONFIG.php';
    ?>

    <br><br><br>

    <!-- Get Database Data -->
    <?php
        $sql = "select * from ap_info";
        $result = $connec->query($sql);

        if($result -> num_rows > 0){

            while($row = $result -> fetch_assoc()){

                echo "<tr><td>".$row["Ap_ID"]."</td>
                      <td>".$row["Floor_No"]."</td>
                      <td>".$row["Rooms"]."</td>
                      <td>".$row["Bathrooms"]."</td>
                      <td><a href='UPDATE_AP_INFO.php ?Ap_ID = $row[Ap_ID] & Floor_No = $row[Floor_No] & Rooms = $row[Rooms] & Bathrooms = $row[Bathrooms]'>
                      <input type='submit' value='Update' id='sub'></a></td>
                      </tr>";
            }
        }else{
            echo "0 results";
        }

        echo "</table>";

        $connec->close();

    ?>

</body>
</html>