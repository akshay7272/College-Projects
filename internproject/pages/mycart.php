 <?php
session_start();
?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>cart</title>
     <meta charset="utf-8">
     <meta name="viewport" content="
	width=device-width,initial-scale=1.0">
     <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <link href="../css/signin.css" rel="stylesheet">
     <link href="../fonts/fontawesome/css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/buy.css">

     <title>liquar store</title>
     <link rel="icon" href="../images/baby.png" type="image/icon type">
 </head>

 <body class="bg-danger">
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
                             <a class="nav-link" href="../pages/Contact.php">Contact Us</a>
                         </li>
                     </ul>
                     <form class="d-flex align-items-center">

                         <div class="dropstart">

                             <a class="dropdown text-white logout" href="#" role="button" id="dropdownMenuLink"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="fas fa-user-tie">&nbsp;<?php echo $_SESSION['username']; ?></i></a>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <li><a class="dropdown-item" href="buy.php">Orders</a></li>
                                 <li><a class="dropdown-item" href="#">Products</a></li>
                                 <li><a class="dropdown-item" href="#">Transactions</a></li>
                                 <li> <a class="dropdown-item logout" href="../pages/logout.php">Sign out</a></li>
                             </ul>
                             <?php
                            $count=0;
                            if(isset($_SESSION['cart']))
                            {
                            $count=count($_SESSION['cart']);
                            }
                            ?>
                             <a href="../pages/mycart.php" class="btn btn-outline-success"> <i
                                     class="fas fa-shopping-cart top_cart " data-bs-toggle="modal"
                                     data-bs-target="#exampleModal">Cart<?php echo $count?></a></i>
                         </div>

                     </form>
                 </div>
             </div>
         </nav>

     </header>
     <div class="container bg-warning ">
         <div class="row ">
             <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
                 <i class="fas fa-shopping-cart top_cart" width="48" height="38"></i>
                 <div class="lh-1">
                     <h1 class="h6 mb-0 text-white lh-1">Your Cart Items </h1>

                 </div>
             </div>
             <div class="col-lg-9">
                 <table class="table">
                     <thead class="text-center table-dark">
                         <tr>
                             <th scope="col">Serial No.</th>
                             <th scope="col">Item name</th>
                             <th scope="col">Item Price</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Total</th>
                             <th scope="col"></th>
                         </tr>
                     </thead>
                     <tbody class="text-center table-light">
                         <?php
  	if(isset($_SESSION['cart']))
  	{
  	foreach($_SESSION['cart'] as $key => $value)
  	 {
  	 	$sr=$key+1;
  		
  		echo "
  		<tr>
  		<td>$sr</td>
  		<td>$value[Item_Name]</td>
  		<td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
  		<td>
        <form action='manage_cart.php' method='POST'>
  		<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='12'>
  		 <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
  		</form>
  		</td>
  		<td class='itotal'></td>
  		<td>
  		<form action='manage_cart.php' method='POST'>
  		 <button  name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
  		 <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
  		</form>
  		</td>
  		</tr>";
  	}
  }
  	?>

                     </tbody>
                 </table>
             </div>

             <div class="col-lg-3">
                 <div class="border bg-light rounded p-4">
                     <h4>Grand Total:</h4>
                     <h5 class="text-right" name="gtotal" id="gtotal"> </h5>
                     <br>
                     <?php 
        if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
        {

		?>
                     <form action="payment.php" method="POST">
                         <div class="mb-3">
                             <label>Full Name</label>
                             <input type="text" name="full_name" class="form-control" required=""
                                 oninvalid="this.setCustomValidity('Enter Your Full Name')"
                                 oninput="setCustomValidity('')">
                         </div>
                         <div class="mb-3">
                             <label>Phone number</label>
                             <input type="text" name="phone_no" class="form-control" required=""
                                 oninvalid="this.setCustomValidity('Enter Your Mobile Number')"
                                 oninput="setCustomValidity('')">
                         </div>
                         <div class="mb-3">
                             <label>Delivery Address</label>
                             <input type="text" class="form-control" name="address" required=""
                                 oninvalid="this.setCustomValidity('Enter Full Address For Your Delivery')"
                                 oninput="setCustomValidity('')">
                         </div>

                         <button class="btn btn-primary btn-block w-100" name="purchase">payment</button>
                     </form>
                     <?php 
          }
		?>
                 </div>
             </div>

         </div>
     </div>
     <script>
     var gt = 0;
     var iprice = document.getElementsByClassName('iprice');
     var iquantity = document.getElementsByClassName('iquantity');
     var itotal = document.getElementsByClassName('itotal');
     var gtotal = document.getElementById('gtotal');

     function subTotal() {
         gt = 0;
         for (i = 0; i < iprice.length; i++) {
             itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
             gt = gt + (iprice[i].value) * (iquantity[i].value);
         }
         gtotal.innerText = gt;
     }
     subTotal();
     </script>

     <script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>

 </body>

 </html>