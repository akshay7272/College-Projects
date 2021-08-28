<?php
session_start();
include('connection.php');
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
    <!-- Header Nav-Bar Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="../pages/homepage.php">Liquor Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

                        <button type="button" class="btn btn-outline-primary  text-white"><a class="login"
                                href="../pages/login.php">Log In</a></button>
                     
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <section class="image container-fluid text-white">
<div class="container py-5">
  <h1 class="d-flex justify-content-center">Registration for online delivery</h1>
  
  <form method="post" action="#" class="row g-3 py-4">
   
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">username</label>
    <input type="text" class="form-control" id="inputEmail4" name="username" required="" oninvalid="this.setCustomValidity('Please Enter Username')"oninput="setCustomValidity('')">
   

  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" required="" oninvalid="this.setCustomValidity('Please Enter Password')" oninput="setCustomValidity('')">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="" name="address" required="" oninvalid="this.setCustomValidity('Please Enter Address with village/post-office/tehsil')" oninput="setCustomValidity('')">
  </div>
  <div class="col-12">
    <label for="PhoneNumber" class="form-label">Mobile No.</label>
    <input type="tel" class="form-control" id="PhoneNumber" name="phone" placeholder="" pattern="[0-9]{10}" required="" oninvalid="this.setCustomValidity('Please Enter 10 Digit Mobile Number')" oninput="setCustomValidity('')">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">District</label>
    <input type="text" class="form-control" id="inputCity" name="district" required="" oninvalid="this.setCustomValidity('Please Enter Your District')" oninput="setCustomValidity('')">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state" required="" oninvalid="this.setCustomValidity('Please Select State')" oninput="setCustomValidity('')">
      <option selected>Choose...</option>
      <option>Himachal Pradesh</option>
      <option>Andhra Pradesh</option>
      <option>Arunachal Pradesh</option>
      <option>Assam</option>
      <option>Bihar</option>
      <option>Chhattisgarh</option>
      <option>Goa</option>
      <option>Gujarat</option>
      <option>Haryana</option>
      <option>Jharkhand</option>
      <option>Karnataka</option>
      <option>Kerala</option>
      <option>Madhya Pradesh</option>
      <option>Maharashtra</option>
      <option>Manipur</option>
      <option>Meghalaya</option>
      <option>Mizoram</option>
      <option>Nagaland</option>
      <option>Odisha</option>
      <option>Punjab</option>
      <option>Rajasthan</option>
      <option>Sikkim</option>
      <option>Tamil Nadu</option>
      <option>Telangana</option>
      <option>Tripura</option>
      <option>Uttar Pradesh</option>
      <option>Uttarakhand</option>
      <option>West Bengal</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Pin-code</label>
    <input type="text" class="form-control" id="inputZip" name="pincode" required=""  oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Pin-Code')" oninput="setCustomValidity('')">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Remember me
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
     <input type="reset" class="btn btn-primary" name="submit">
  </div>
</form>
</div>
</section>

 <script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>
  <script src="../js/sweetalert.min.js"></script>

</body>
</html>
<?php
if(isset($_POST['submit'])){
   $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];

$query = "INSERT INTO `register`(`username`, `password`, `address`, `phone`, `district`, `state`, `pincode`) VALUES ('$username','$password','$address','$phone','$district','$state','$pincode')";
    if(mysqli_query($conn,$query)){
       ?>
        <script>
           
    swal({
      title: "Registered Successfully! You can login with your username & password!",

      icon: "success",
      button: "OK",
    });
        </script>
        <?php
        }
        else {
          echo "data not registered!";
        }
} 
?>
 