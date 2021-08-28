<?php 
$message = null;
if (isset($_POST) && !empty($_POST)) {
    $conn = new Connect();
    $where = ["username" => $_POST["username"], "password" => base64_encode($_POST["password"])];
    $data = $conn->select("ownr",$where)[0];
    $conn->conn->close();
    if (isset($data) && !empty($data)) {
        $_SESSION["isLogin"] = true;
        $_SESSION["id"] = $data["id"];
        header("Location: \?page=admin");
        exit();
    }
    else 
        $message = "Invalid Username or password";
}
?>
<div class="d-flex justify-content-center h-100">
	<div class="card">
		<div class="card-header">
			<h3>Sign In</h3>
			<div class="d-flex justify-content-end social_icon">
				<span><i class="fab fa-facebook-square"></i></span> 
				<span><i class="fab fa-google-plus-square"></i></span> 
				<span><i class="fab fa-twitter-square"></i></span>
			</div>
		</div>
		<div class="card-body">
			<?php if (isset($message) && !empty($message)) { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
 					<?= $message ?>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
			<?php }?>
			<form method="post" name="login">
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Username" name="username" id="username">
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Password" name="password" id="password">
				</div>
				<div class="input-group form-group remember">
					<label class="checkboxContainer">Remember Me
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-group">
					<input type="submit" value="Login" class="btn login_btn">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
//Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='login']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      //firstname: "required",
      //lastname: "required",
      username: "required",
      //email: {
     //   required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
     //   email: true
     // },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      //firstname: "Please enter your firstname",
      //lastname: "Please enter your lastname",
      username: "Please enter your username",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      //email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>