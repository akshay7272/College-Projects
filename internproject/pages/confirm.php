php<!doctype html>
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
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-primary" href="../pages/homepage.html">Liquor Store</a>
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

            <button type="button" class="btn btn-outline-primary  text-white"><a class="login nav-link-active"
                href="../pages/login.php">Log In</a></button>
            <button type="button" class="btn btn-outline-primary mx-1 text-white"><a class="login"
                href="../pages/register.php">Sign Up</a></button>
          </form>
        </div>
      </div>
    </nav>

  </header>
  <section class="image1">
    <div class="row align-items-center g-5 py-3 mx-1">
        
      <div class="col-10 mx-auto col-lg-4">

        <form class="p-5 border rounded-3 form-opacity">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">New Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
              </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Save Changes</button>
          <p class="text-center my-2"><a href="../pages/forget.html" class="forget_password">Forget password</a></p>

        </form>
      </div>
    </div>
  </section>
  <script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>
</body>
</html>