<?php 
session_start();
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['purchase']))
	{
       $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]')";
       
       if(mysqli_query($conn,$query1))
       {
       	$Order_Id=mysqli_insert_id($conn);
       	$query2= "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
       	$stmt=mysqli_prepare($conn,$query2);
       	if($stmt)
       	{
       		mysqli_stmt_bind_param($stmt,"isii", $Order_Id, $Item_Name, $Price, $Quantity);
       		foreach ($_SESSION['cart'] as $key => $values) 
       		{            
       			$Item_Name=$values['Item_Name'];
       			$Price=$values['Price'];
       			$Quantity=$values['Quantity'];
       			mysqli_stmt_execute($stmt);
       		}
       		unset($_SESSION['cart']);
       		 	echo"<script>
       		 	alert('order placed');
       	         window.location.href='buy.php';
                </script>"; 
       	}
       	else
       	{
           echo"<script>
           alert('sql prepare error');
       	         window.location.href='mycart.php';
                </script>"; 
      	}
       }
       else {
       	echo"<script>alert('sql  error');
       	 window.location.href='mycart.php';
                </script>"; 
       }
	}
}
?>