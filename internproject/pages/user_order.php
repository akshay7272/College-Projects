<?php 
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/user.css">
  <title>orders</title>
</head>
<body style="background-color:whitesmoke,text-align: center;" >
     <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Liquar Profile </a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../pages/logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

   <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block   sidebar">
    
      </nav>



   <div class="col-lg-9 mt-3">
               
          <table class="table text-center   p-2 bd-highlight">
          <thead  >
            <tr class="border border-secondary">
           
               
                <th scope="col">Date</th>
             <th scope="col"> My Orders</th>
           </tr>
  </thead>
  <tbody>


    <?php
          $query="SELECT * FROM `order_manager` WHERE Full_Name= '$_SESSION[username]'";
            $user_result=mysqli_query($conn,$query);
              while($user_fetch=mysqli_fetch_assoc($user_result))
             {
            echo"
            <tr class=' border border-secondary'>
             
             
               
               <td>$user_fetch[Date]</td>
            
             <td>
            <table class='table text-center   border border-success'>
              
              <thead>
               
                   <tr>
                   <th scope='col'>Item Name</th>
                   <th scope='col'>Price</th>
                   <th scope='col'>Quantity</th>
                 
                   </tr> 
                   
               </thead>
               <tbody>
                  ";
                $order_query="SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[Order_id]'";
                   $order_result=mysqli_query($conn,$order_query);
                while($order_fetch=mysqli_fetch_assoc($order_result))
                {
               echo"
                <tr>
                  <td>$order_fetch[Item_Name]</td>
                  <td>$order_fetch[Price]</td>
                  <td>$order_fetch[Quantity]</td>

                </tr>

                     ";
                   }
                
                     
               echo "
                        </tbody>
                      </table> 
                    </td>
                 </tr>

               ";
             }
                    
     ?>
     
     


    

    
  </tbody>
  </table>

      
   
  </div>
     

 
</body>
</html>
