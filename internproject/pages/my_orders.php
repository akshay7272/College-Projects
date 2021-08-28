<?php
include "connection.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
  <title>Profile</title>
</head>
<body style="background-color:whitesmoke;">
  <div class="container-fluid">
    <form action="" method="POST">
      <button class="btn btn-outline-primary" style="float:right; width: 70px;" name="submit">Edit</button>
    </form>
<div class="wrapper">
   <?php echo "<b> Hello Mr.</b>"; echo $_SESSION['username']; ?>

  <?php

  $c = $_SESSION['username'];

  $get_c = "select * from register where username='$c'";
  $run_c = mysqli_query($conn, $get_c);

  $row_c  = mysqli_fetch_assoc($run_c);

  $id = $row_c['id'];
?>
<table class="table table-striped table-hover table-bordered">
                <tr class=" text-center">
                  <th>id</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>

<?php  
$get_orders ="select * from `user_orders` ";


$result = mysqli_query($conn, $get_orders) or die("Error: " . mysqli_error($conn));

while ($row_orders=mysqli_fetch_assoc($result)){

  $Order_id = $row_orders['Order_id'];
  $Item_Name = $row_orders['Item_Name'];
  $Price = $row_orders['Price'];
  $Quantity = $row_orders['Quantity'];



echo "<tr>
      <td> $Order_id</td>
       <td> $Item_Name</td>
        <td>$Price</td>
         <td> $Quantity</td>
         </tr>";  }
         ?>


    </div>
</div>

  </div>

</body>
</html>





