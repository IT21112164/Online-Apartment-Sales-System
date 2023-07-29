<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="ADMIN_NAV.css">
    <link rel="stylesheet" href="../Lakindu Virajith/NAVIGATION.css">
    <link rel="stylesheet" href="../Lakindu Virajith/BACK_BUTTON.css">
    
</head>
<body>

    <header>
        <!-- Header -->
        <h1 id="header">ADMIN PAGE</h1>

        <!-- Navigation Bar -->
        <ul id="n_bar">
            <li ><a href="../Chandeepa Isuranga/GET_AP_INFO.php">APARTMENT</a></li>
            <li ><a href="../Lakindu Virajith/GET_MEMBER.php">MEMBERS</a></li>
            <li ><a href="#">FEED BACK</a></li>
            <li ><a href="../Nipunika Sathsarani/GET_PAYMENT.php">PAYMENT</a></li>
        </ul>

        <a id="go" href="../Hashini Ruwanthika/HOME.html">
        <button id="back_b">USER MODE</button></a>

        <hr></hr>
    </header>

    <!-- Ap_Info Table -->
    <br><br>
    <table border="4px" width="100%">
        <tr>
            <th class="row">Custemer ID</th>
            <th class="row">Customer Name</th>
            <th class="row">E-mail</th>
            <th class="row">Moblie Number</th>
            <th class="row">Message</th>
            <th class="row">Edit</th>
        </tr>

    <!-- PHP Connect -->
    <?php
	include_once '../Anushka Dilshan/CONFIG.php';
    ?>

    <br><br><br>

    <!-- Get Database Data -->
    <?php
        $sql = "select * from contact";
        $result = $connec->query($sql);

        if($result -> num_rows > 0){

            while($row = $result -> fetch_assoc()){

                echo "<tr><td>".$row["Custemer_ID"]."</td>
                      <td>".$row["Name"]."</td>
                      <td>".$row["Email"]."</td>
                      <td>".$row["TP"]."</td>
                      <td>".$row["Msg"]."</td>
                      <td><a href='DELETE_FEED_BACK.php ?Custemer_ID = $row[Custemer_ID]'><input type='submit' value='Delete' id='sub'></a></td>
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