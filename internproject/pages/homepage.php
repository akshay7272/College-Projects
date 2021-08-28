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

 <style ></style>


</head>


<body class="my-custom-scrollbar my-custom-scrollbar-primary">

    <!-- Header Nav-Bar Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-0">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Liquor Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../pages/homepage.php">Home</a>
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

 
                        <div class="dropstart" >

                 <a class="dropdown text-white logout" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-tie">&nbsp;<?php echo $_SESSION['username']; ?></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="user_profile.php">profile</a></li>
                <li><a class="dropdown-item" href="user_order.php">Orders</a></li>
            <li> <a class="dropdown-item logout" href="../pages/logout.php">logout</a></li>
          </ul>
         
               </div>
                        
                    </form>
                   
                </div>
            </div>
        </nav>

    </header>

    <section>

       
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/wer.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> 
                    </div>
                </div>
               
                <div class="carousel-item">
                    <img src="../images/11.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/we.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Second Section- -->

    <section class="lavender">


        <section class="py-5 text-center container ">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Our Services For You</h1>
                    <p class="lead text-muted">We are providing various liquor which are available in India. From this website you can easily order any
                        Indian Liquor bottle to enjoy your great moments.
                   </p>

                </div>
            </div>
        </section>

        <div class="album lavender">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/1b.jpg" class="bd-placeholder-img card-img-top transform-image" width="100%"
                                height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>Tuborg Green</b>, the ultimate easy drinking beer was launched in India in March 2009.
                                    The beer is medium rich and lively with a moderate bitterness in the aftertaste. 
                                    It's excellent with light meals such as salads and spicy Indian dishes.
                                    </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/2b.jpg" class="bd-placeholder-img card-img-top transform-image" width="100%"
                                height="225">

                            </img>
                            <div class="card-body">
                                <p class="card-text"><b>Jack Daniel's</b> is a brand of Tennessee whiskey and the top-selling American whiskey in the world. 
                                    It is produced in Lynchburg, Tennessee, by the Jack Daniel Distillery, which has been owned by the Brown–Forman Corporation since 1956.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/2.jpg" class="bd-placeholder-img card-img-top transform-image" width="100%"
                                height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>Blenders Pride</b> is a brand of Indian whisky, owned by Pernod Ricard, and launched in 1995.
                                     It is a blend of Indian grain spirits and imported Scotch malt and contains no artificial flavouring. It is available in 5 different bottle formats.</p>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/21.jpg" class="bd-placeholder-img card-img-top transform-image" width="100%"
                                height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>Black Label</b>: Aged 12 years, it is one of the world's best-selling Scotch whiskies. 
                                    The whisky was created taking Black Label as a blueprint, adding more peaty malt whiskies to it and maturing it in heavily charred old oak casks.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/9.jpg" class="bd-placeholder-img card-img-top transform-image" width="100%"
                                height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text">
                                     <b>Tuborg Beer</b> is medium rich and lively with a moderate bitterness in the aftertaste. It's excellent with light meals such as salads and spicy Indian dishes. 
                                    Tuborg Green is available in 330ml bottles, 500ml cans and 650ml bottles in India.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/rs.jpg" class="bd-placeholder-img card-img-top transform-image" width="100%"
                                height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>Royal Stag</b>, also known as Seagram's Royal Stag, is an Indian brand of whisky launched in 1995. It is available in many countries across the world in various pack sizes. 
                                    It is Pernod Ricard's best selling brand by volume. It is a blend of grain spirits.</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/old.jpg"
                                class="bd-placeholder-img card-img-top transform-image" width="100%" height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>Old Monk Rum</b> is an iconic vatted Indian dark rum, launched in 1954. It is blended and aged for a minimum of 7 years.
                                     It is a dark rum with a distinct vanilla flavour, with an alcohol content of 42.8%. It is produced in Ghaziabad, Uttar Pradesh.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/sig.jpg" class="bd-placeholder-img card-img-top transform-image"
                                width="100%" height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>Signature</b>, also known as McDowell's Signature, is a brand of Indian whisky, manufactured by United Spirits Ltd, a Diageo Group company.
                                     It was launched in 1994. Signature is a blend of imported Scotch whisky and locally produced products.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm item-zoom">
                            <img src="../images/mc.jpg"
                                class="bd-placeholder-img card-img-top transform-image" width="100%" height="225">

                            </img>

                            <div class="card-body">
                                <p class="card-text"><b>McDowell's No.1</b> is an Indian brand of spirits manufactured by United Spirits Limited, a subsidiary of Diageo.
                                     It is USL's flagship brand comprising three categories - whisky, brandy, and rum. The brand also has bottled water and soda.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Third Section- -->
    <section class="text-white">
        <div class="container py-4">


            <div class="p-5 mb-4  rounded-3 jumbo">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold ">What is Liquor?</h1>
                    <p class="col-md-8 fs-4 text-justify text-light">A liquor is an alcoholic drink composed of distilled spirits and additional flavorings such as sugar, fruits, herbs, and spices.
                         Often served with or after dessert, they are typically heavily sweetened 
                         and un-aged beyond a resting period during production, when necessary, for their flavors to mingle.</p>

                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6 ">
                    <div class="h-100 p-5 text-dark rounded-3 text-white jumbo1">
                        <h2>Alcoholic beverage</h2>
                        <p>Water remains behind and is discarded. The concentrated liquid, called a distilled beverage, includes such liquors as whiskey, gin, vodka, rum, brandy, and liqueurs, or cordials. 
                            They range in alcoholic content usually from 40 to 50 percent, though higher or lower concentrations are found.</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 border rounded-3 jumbo1">
                        <h2>Distilled spirits</h2>
                        <p>The making of distilled spirits begins with the mashes of grains, fruits, or other ingredients. 
                            The resultant fermented liquid is heated until the alcohol and flavourings vaporize and can be drawn off, cooled, and condensed back into a liquid.</p>

                    </div>
                </div>
            </div>



        </div>
    </section>
    <section>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mx-2">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="../images/desi.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="400" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Desi Daru (देसी दारू)</h1>
                <p class="lead">Desi daru or sharaab is the most selling alcoholic drink in the 
                    Indian subcontinent, also known by different type and name such as Tharra from sugarcane, Santra, Narangi and Safeda
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                </div>
            </div>
        </div>
    </section>
   <footer class="text-white bg-dark">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <h5>STAY CONNECTED</h5><h6>At Liquor Store, our mission is to revolutionize liquor ordering.</h6>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2020-2021</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>CONTACTS</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, New York, USA</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd>@gmail.com</dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd>1.555.652.258 <span>or</span> 1.55.652.268
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>LINKS</h5>
              <ul class="nav-list list-unstyled ">
                <li><a href="#" class="text-decoration-none text-white">About</a></li>
                <li><a href="#" class="text-decoration-none text-white" >Buy Now</a></li>
                <li><a href="#" class="text-decoration-none text-white">Contact</a></li>
                <li><a class="login" href="#" class="text-decoration-none text-white" >Back to top</a></li>
              </ul>
              <p class="float-end">
            
          </p>
            </div>
          </div>
        </div>
          
      
        </div>
      </footer>






    <script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>


</body>

</html>