   

<?php
include('connection.php');

session_start();
//session_regenerate_id(true);
//if(isset($_SESSION['username'])){
  //header("location:admin_login.php");
//}
?>
<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <body>
    <nav class="navbar bg-dark sticky-top  flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white " href="#">Admin:<? php echo $_SESSION['adminuser'] ?></a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link text-white" href="#" name="Logout">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active text-white" href="admin_dashboard.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="adminpannel.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="staff.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Staff
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="user_details.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link text-white" href="products.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Products
                </a>
              </li>
             
            </ul>

           
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg- mt-0">
           <?php
 // if(isset($_POST['Logout']))
 // {
  //  session_destroy();
  //  header("location:admin_login.php");
  //}
 ?>

    
      <div class="col-lg-12">
               
          <table class="table text-center  p-2 bd-highlight">
          <thead class="table-light" >
            <tr>
            <th scope="col">Order ID</th>
             <th scope="col">Customer Name</th>
             <th scope="col">Phone No</th>
             <th scope="col">Address</th>
               <th scope="col">Pay mode</th>
             <th scope="col">Orders</th>
           </tr>
  </thead>
  <tbody>


    <?php
          $query="SELECT * FROM `order_manager`";
            $user_result=mysqli_query($conn,$query);
              while($user_fetch=mysqli_fetch_assoc($user_result))
             {
            echo"
            <tr class='table-light border border-secondary'>
             <td>$user_fetch[Order_id]</td>
             <td>$user_fetch[Full_Name]</td>
              <td>$user_fetch[Phone_No]</td>
              <td>$user_fetch[Address]</td>
               <td>$user_fetch[Pay_Mode]</td>
             <td>
            <table class='table text-center table-light  border border-success'>
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
        </main>
      </div>
    </div>
</body>
</body>
</html>












