<?php 
$message = null;
$conn = new Connect();
if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["contact_method"]) && !empty($_POST["contact_method"])) {
        $_POST["contact_method"] = implode(",", $_POST["contact_method"]);
    }
    $message = $conn->insert("contact_us", $_POST);
}
?>
<div class="col-12 mainDiv ">
    <h3>Contact Us</h3>
    <p class="mainP">Arrange a viewing</p>
    <p>Weve told you pretty much everything you need to know about our student rooms but were sure that some of you may like to try 
    before you buy. So why not pop along and let one of our awesome team show you around?</p>
    <p>Simply fill out the form below, we will check the diary and get straight back to you to book in your show around 
    so you can see how fantastic our location is for yourself.</p>
    <p>Youre welcome to come and pop in to take a look around any day between Monday to Friday from 9am and 5pm. Evening viewings are 
    available upon request.</p>
    <h5>Note: Questions marked with * are mandatory</h5>
    <?php if (isset($message) && !empty($message)) { ?>
		<div class="alert alert-danger alert-dismissible fade show rWhite" role="alert">
			<?= $message ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="rWhite" aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php }?>
    <form method="post" class="col-8" name="contactUs">
    	<fieldset>    	
    		<legend>Your Contact Details</legend>
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="form-group row">
    					<label class="col-sm-3 col-form-label">Your Name *</label>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="name">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-3 col-form-label">Your E-mail *</label>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="email">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-3 col-form-label">Your Phone No. *</label>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="phone">
    					</div>
    				</div>
    			</div>
    		</div>
    	</fieldset>
    	<fieldset>    	
    		<legend>Your Contact Details</legend>
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="form-group row">
    					<label class="col-sm-3 col-form-label">College Name *</label>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="college">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-3 col-form-label">Course Name *</label>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="course">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-3 col-form-label">Year of Study *</label>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="year">
    					</div>
    				</div>
    			</div>
    		</div>
    	</fieldset>
    	<p><strong>Wed like to contact you about your future accommodation requirements, competitions and promotions. Please let us 
    	know your preferred contact method:</strong></p>
    	<div class="input-group form-group remember">
    		<label class="checkboxContainer">Email
    			<input type="checkbox" name="contact_method[]" value="Email">
    			<span class="checkmark"></span>
    		</label>
    	</div>
    	<div class="input-group form-group remember">
    		<label class="checkboxContainer">Text
    			<input type="checkbox" name="contact_method[]" value="Text">
    			<span class="checkmark"></span>
    		</label>
    	</div>
    	<div class="input-group form-group remember">
    		<label class="checkboxContainer">Phone Call
    			<input type="checkbox" name="contact_method[]" value="Phone Call">
    			<span class="checkmark"></span>
    		</label>
    	</div>
    	<div class="form-actions">
    		<button class="btn btn-outline-primary" type="submit" >Submit</button>
    	</div>
    </form>
 </div>
 <script type="text/javascript">
//Wait for the DOM to be ready
$(function() {
  $("form[name='contactUs']").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
        number: true
      },
      college: "required",
      course: "required",
      year: "required",
      'contact_method[]':{
        required:true
      } 
    },
    messages: {
    	name: "Please Enter your Name",
        email: {
          required: "Email is required",
          email: "Invalid Email"
        },
        phone: {
    	  required: "Please provide a Phone Number",
          minlength: "Your Phone Number must be at least 10 characters long",
          maxlength: "Your Phone Number must be at least 10 characters long",
          number: "Invalid Phone Number"
        },
        college: "Please enter your College",
        course: "Please enter your current Course",
        year: "Please enter your Year of Study",
        'contact_method[]':{
          required: "Please select alteast one Contact Method"
        }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>