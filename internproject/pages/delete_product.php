<?php 
include('connection.php');


$id =$_GET['id'];

$q = "DELETE FROM `products` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:products.php');



?>