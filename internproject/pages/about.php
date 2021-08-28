<?php

session_start();
if(!isset($_SESSION['username'])){
    echo "user not found";
    header('location:login.php');
}
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
      <link href="../fonts/fontawesome/css/all.css" rel="stylesheet">
    
    <title>liquar store</title>
    <link rel="icon" href="../images/baby.png" type="image/icon type">
   
</head>


<body>

    <!-- Header Nav-Bar Section -->
     <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="../pages/homepage.html">Liquor Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/homepage.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="../pages/buy.php" id="buynow">
                                Buy Now
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../pages/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/Contact.php">Contact Us</a>
                        </li>
                       </ul>
                 <form class="d-flex align-items-center">
                             
                <div class="dropstart" >

                 <a class="dropdown text-white logout" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-tie">&nbsp;<?php echo $_SESSION['username']; ?></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="buy.php">Orders</a></li>
                <li><a class="dropdown-item" href="#">Products</a></li>
             <li><a class="dropdown-item" href="#">Transactions</a></li>
            <li> <a class="dropdown-item logout" href="../pages/logout.php">logout</a></li>
          </ul>
         
               </div>
               
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <div class="container">
        <div class="about-page mx-auto mw-800">
    <div class="page-title">
        <h1 class="font-weight-bold text-center mb-3 mt-4">About Liquor Store</h1>
    </div>
    <div class="page-body mt-3 mb-5 pt-2">
        <h2 class="text-primary font-md text-center">
            <strong>At Liquor Store, our mission is to revolutionize liquor ordering</strong>
        </h2>
        <div class="our-team font-regular ">
            <p>
                We believe liquors, whether wine, beer, whisky or vodka, it's something which has a special relation with humans. We live in a world where convenience is trending and has changed the way business used to reach and interact
                with their audience. Technology has changed so much around us. It has brought convenience in your hand, at your fingertips. People today want a faster and easier way to buy liquor. As it's said, we live online nowadays
                and we find it more convenient when technology does it for us.
                Customer satisfaction runs in our business as smooth as wine and we put our customers first. Always. We're committed to provide the best services to our customers.
            </p>

            <img class="img-fluid" src="../images/about-us-bg.png">

            
        </div>
    </div>
</div>
<section class=" container text-center ">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Our Team</h1>
        <p class="lead text-muted">Liquor web application can control the flow of Covid-19 virus.</p>
      </div>
    </div>
  </section>
<div class="row featurette d-flex jusify-content-center align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted">I think this website is very essential due to covid-19 & i think it would be a great option to be safe and secure while it comes in purchasing liquor online.</span></h2>
        <p class="lead">Due to much rush on the liquor stores covid-19 is increasing day by day.</p>
      </div>
      <div class="col-md-5">
        <img src="../images/ak.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
      <hr class="featurette-divider my-3">
      
    <div class="row featurette d-flex jusify-content-center align-items-center ">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, <span class="text-muted">people can buy liquor without getting in touch with each other which makes a good sense and i appriciate that.</span></h2>
        <p class="lead">People can easily enjoy the parties at their homes without getting in touch with other people.</p>
      </div>
      <div class="col-md-5 order-md-1 pb-1">
       <img src="../images/ab.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
    </div>
    </div>
 <footer class="text-muted bg-dark">
  <div class="container py-5">
    <p class="float-end ">
      <a class="login" href="#">Back to top</a>
    </p>

  </div>
</footer>

<script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>


</body>
</html>