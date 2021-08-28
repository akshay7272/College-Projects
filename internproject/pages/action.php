<?php
session_start();
include('connection.php');
if(isset($_POST['action'])){
	$sql = "SELECT * FROM products WHERE Category !=''";

	if(isset($_POST['Category'])){
		$Category = implode("','", $_POST['Category']);
		$sql .="AND Category IN('".$Category."')";
	}
	$result= $conn->query($sql);
	$output='';
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			 $output .=' <div class="col-md-3 mb-2">
     <form  method="POST" action="manage_cart.php">
    <div class="card border-secondary ">
      <img src="'. $row['Pic'].'" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$row['Name'].'</h5>
        <p class="card-text"><i class="fas fa-rupee-sign"></i>'.number_format($row['Price']).'</p>
        <button type="submit" name="Add_To_Cart" class="btn btn-primary btn-sm add_cart_btn w-100">Add to cart</button>
        <input type="hidden" name="Item_Name" value= '. $row['Name'].' >
        <input type="hidden" name="Price" value= '.number_format($row['Price']).' >
      </div>
    </div>
  </form>
  </div>';
		}
	}
	else{
		$output="<h3> No Prduct Found ";
	}
	echo $output;
}

?>