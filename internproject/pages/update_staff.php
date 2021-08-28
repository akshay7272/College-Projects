<?php

include('connection.php');

if(isset($_POST['done'])){
  
  
  $id = $_GET['id'];
  $name =$_POST['name'];
  $phone=$_POST['phone'];
  $address= $_POST['address'];
  $job= $_POST['job'];

 $q ="update `staff` set id=$id, name='$name',phone='$phone', address='$address',job='$job' where id=$id";
 
 $query = mysqli_query($conn,$q);

 header('location:staff.php');


}

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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 " href="#">Admin:<? php echo $_SESSION['adminuser'] ?></a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#" name="Logout">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="admin_dashboard.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminpannel.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="staff.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Staff
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user_details.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
              </li>
             
            </ul>

           
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-0">


    <div class="col-lg-10 m-auto ">
        <form method="post">
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="text-white text-center">Update Employee Details</h3>
        </div>
       <label>Name</label>
       <input type="text" name="name" class="form-control" required>
        <label>Phone</label>
       <input type="tel" name="phone" class="form-control" required>
        <label>Address</label>
       <input type="text" name="address" class="form-control" required>
        <label>Job</label>
       <input type="text" name="job" class="form-control" required><br>
       <button class="btn btn-success" type="submit" name="done"> Submit </button>
       </div>
      </form>
      </div>

</main>

</body>
</html>