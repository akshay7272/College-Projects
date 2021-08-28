<?php
include('connection.php');


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
                            <a class="nav-link" href="../pages/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../pages/Contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex">
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
    <!-- Default dropstart button -->


    <section>
        <form action="#" method="post" class="form-sign p-2" >
            
            <div class="text-center mb-4">
            <h2 id="display_message"></h2>
                <h1 class="h3 mb-3 font-weight-normal">Contact Us</h1>
                <img class="mb-4" src="../images/about-us-bg.png" alt="" width="250" height="87">
            </div>
            <div class="form-label-group">
                <input type="text" id="inputname" class="form-control my-2" placeholder="Name" required=""
                    autofocus="hello" name="name"  oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                    
              
            </div>

            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control my-2" placeholder="Email address" required=""
                    autofocus="" name="email"  oninvalid="this.setCustomValidity('Please Enter Your Email')" oninput="setCustomValidity('')">
               
            </div>
            <div class="form-label-group">
                <input type="text" id="inputarea" class="form-control my-2" placeholder="Subject" required=""
                    autofocus="" name="subject"  oninvalid="this.setCustomValidity('Please Provide Subject')" oninput="setCustomValidity('')">
             </div>    
             <div class="form-label-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="message" required=""  oninvalid="this.setCustomValidity('Please Enter Your Message')" oninput="setCustomValidity('')"></textarea>
             </div>   

           

           
            <button type="submit" class="btn btn-lg btn-primary btn-block mt-3 " id="submit" name="sendmessage" >Send Message</button>
            <p class="mt-5 mb-3 text-muted text-center">© 2021-2022</p>
        </form>
    </section>

   <script src="../css/bootstrap/js/bootstrap.bundle.js" rel="javascript"></script>
    <script src="../js/sweetalert.min.js"></script>
  
</body>

</html>
<?php
if(isset($_POST['sendmessage'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $query = " INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name',' $email','$subject','$message')";

    if(mysqli_query($conn,$query)){
        ?>
        <script>
           
    swal({
      title: "Thanks for contacting us",

      icon: "success",
      button: "OK",
    });
       </script>
        <?php }
        else {
             echo "no data found";
        }
  }

?>