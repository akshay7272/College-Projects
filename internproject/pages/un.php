<?php
include('connection.php');
?>
<?php

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $save="INSERT INTO `user`(`fname`, `lname`) VALUES ('$fname','$lname')";
    if(mysqli_query($conn,$save))
    {
        echo "inserted";

    }
    else {
        echo "not inserted";
    }
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="#" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 



</body>
</html>

