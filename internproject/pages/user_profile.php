<?php
include "connection.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/user.css">
   <link href="../fonts/fontawesome/css/all.css" rel="stylesheet">
	<title>Profile</title>
</head>
<body style="background-color:whitesmoke,text-align: center;">
     <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Liquar Profile </a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../pages/logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

  <?php
  
  $q =mysqli_query($conn,"SELECT * FROM `register` WHERE  username = '$_SESSION[username]';");

    ?>
  
    <?php

      $row=mysqli_fetch_assoc($q);

      
    ?>
  

   <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light  sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active text-warning" href="user_profile.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                 My profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="user_order.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              
           
             
            </ul>

           
          </div>
      </nav>


       <div class="page-content page-container col-md-10" id="page-content">
    <div class="padding ">
        <div class="row container justify-content-center  ">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full m-l-4">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-dark user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600 tt"><?php echo $row['username'];?></h6>
                                <p>User</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMATION</h6><hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['address'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Contact</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['phone'];?></h6>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['district'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">State</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['state'];?></h6>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Pin-Code</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['pincode'];?></h6>
                                    </div>
                                  </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











</body>
</html>