<?php 
include('connection.php');


$id =$_GET['id'];

$q = "DELETE FROM `staff` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:staff.php');



?>