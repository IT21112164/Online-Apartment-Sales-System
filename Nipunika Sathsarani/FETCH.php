  <!-- PHP Connect -->
  <?php
   include_once '../Anushka Dilshan/CONFIG.php';

   $selection1 = "SELECT * FROM apartment WHERE apart_No= '0001'";
   $result1 = mysqli_query($connec, $selection1);
?>