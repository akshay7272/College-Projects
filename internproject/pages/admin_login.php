<?php
 session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">

  <title>liquar store</title>
  <link rel="icon" href="../images/baby.png" type="image/icon type">
</head>

<body>
  <?php
include'connection.php';
if(isset($_POST['submit'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $sql1= "select * from admin where  username = '".$uname."' AND password='".$password."'";
  $result1=mysqli_query($conn,$sql1);
  $user_pass=mysqli_fetch_assoc($result1);
  $db_pass=$user_passs['username'];

if(mysqli_num_rows($result1)==1){
  echo "login success";
  header('location:admin_dashboard.php');
  $_SESSION['username']= $user_passs['username'];
  exit();
}
else{
  ?>
  <script>
    alert("username/password is not correct");
location.replace('admin_login.php');
  </script>
  <?php
 
  exit();
}}
?>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-primary" href="../pages/homepage.php">Liquor Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="../pages/homepage.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="../pages/buy.php" id="buynow">
                Buy Now
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/Contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex">

           
            <button type="button" class="btn btn-outline-primary mx-1 text-white"><a class="login"
                href="../pages/register.php">Sign Up</a></button>
          </form>
        </div>
      </div>
    </nav>

  </header>
  <section class="image1">
    <div class="row align-items-center g-5 py-4 mx-1">

      <div class="col-10 mx-auto col-lg-4">

        <form class="p-5 border rounded-3 form-opacity" method="POST" action="#" >
          <div class="form-floating mb-3">
            <input type="username" class="form-control" id="floatingInput" name="username" placeholder="name@example.com" >
            <label for="floatingInput">Admin</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3 text-white">
            <label>
              <input type="checkbox" value="rememberme"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">log in</button>
          <p class="text-center my-2"><a href="../pages/login.php" class="forget_password text-white">Log in as Customer</a></p>

        </form>
      </div>
    </div>
  </section>
  <script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>
</body>
</html>