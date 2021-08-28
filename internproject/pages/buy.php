
<?php
session_start();
include('connection.php');
?>
<?php


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
     <script src="../css/bootstrap/js/jquery.js" rel="javascript"></script>
    <link rel="stylesheet" href="../css/buy.css">

    <title>liquar store</title>
    <link rel="icon" href="../images/baby.png" type="image/icon type">

 </head>
<body bgcolor="#f6f6f6">

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
                            <a class="nav-link active" href="../pages/buy.php" id="buynow">
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
                             
                <div class="dropstart" >

               <a class="dropdown text-white logout" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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
                           <a href="mycart.php" class="btn btn-outline-success"> <i class="fas fa-shopping-cart top_cart " data-bs-toggle="modal" data-bs-target="#exampleModal">Cart<?php echo $count?></a></i>
               </div>
              
                    </form>
                </div>
            </div>
        </nav>

    </header>
   

 <div class="container-fluid">
   <div class="row">
     
     <div class="col-lg-3"><h5>Products</h5>
     <hr>
     <h6 class="text-info">Select Category</h6>
     <ul class="list-group">
       <?php 
            $sql = "SELECT DISTINCT Category FROM products ORDER BY Category";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
       ?>
    <li class="list-group-item">
      <div class="form-check">
        <label class="from-check-label">
          <input type="checkbox" class="from-check-input product_check"
           value="<?= $row ['Category']; ?>" id="Category"> <?=$row ['Category']; ?>
        </label>
      </div>
    </li>
<?php } ?>
     </ul></div>
     <div class="col-lg-9">
       
<h5 class="text-center" id="textChange">All Products</h5>
<hr>
<div class="row" id="result">
  <?php 
      $sql ="SELECT * FROM products";
       $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
  ?>
  <div class="col-md-3 mb-2">
     <form  method="POST" action="manage_cart.php">
    <div class="card border-secondary">
      <img src="<?= $row['Pic']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $row['Name'];  ?></h5>
        <p class="card-text"><i class="fas fa-rupee-sign"></i><?=number_format($row['Price']);?></p>
        <button type="submit" name="Add_To_Cart" class="btn btn-primary btn-sm add_cart_btn w-100">Add to cart</button>
        <input type="hidden" name="Item_Name" value= <?= $row['Name']; ?> >
        <input type="hidden" name="Price" value=<?=number_format($row['Price']);?> >
      </div>
    </div>
  </form>
  </div>
    <?php } ?>
</div>

     </div>
   </div>
    </div>
   


    <script src="../css/bootstrap/js/bootstrap.min.js" rel="javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){

   $(".product_check").click(function(){

    var action= 'data';
    var Category= get_filter_text('Category');

    $.ajax({
      url:'action.php',
      method:'POST',
      data:{action:action, Category:Category},
      success:function(response){
        $("#result").html(response);
        $("#textChange").text("Filtered Products");
        
      }
    });

   });
 
  function get_filter_text(text_id) {
      var filterData = [];
      $('#'+text_id+':checked').each(function(){
        filterData.push($(this).val());
      });
      return filterData;
    }
    
      });
    </script>
</body>

</html>




