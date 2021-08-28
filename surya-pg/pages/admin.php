<?php 
$message = null;
$conn = new Connect();
if (isset($_POST) && !empty($_POST)) {
    
    if($_POST["type"] == "update"){
        unset($_POST["type"]);
        $res = $conn->update("ownr", $_POST, "id=".$_SESSION["id"]);
        $message = $res;
    }
    else if($_POST["type"] == "insert"){
        unset($_POST["type"]);
        $_POST["password"] = base64_encode($_POST["password"]);
        $res = $conn->insert("ownr", $_POST);
        $message = $res;
    }
    else if($_POST["type"] == "edit"){
        unset($_POST["type"]);
        $res = $conn->update("ownr", $_POST, "id=".$_POST["id"]);
        $message = $res;
    }
    else if($_POST["type"] == "delete"){
        unset($_POST["type"]);
        $res = $conn->delete("ownr", $_POST["id"]);
        $message = $res;
    }
    else if($_POST["type"] == "contact"){
        $message = $conn->update("contact_us", ["contacted" => true], "id=".$_POST["id"]);
    }
}
$where = ["id" => $_SESSION["id"]];
$data = $conn->select("ownr",$where)[0];
$admins = $conn->select("ownr");
$contactData = $conn->select("contact_us");
$conn->conn->close();
?>
<div class="col-12 mainDiv ">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
		</li>
		<?php if($_SESSION["id"] == 1){?>
    		<li class="nav-item">
    			<a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New Admin</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="false">View Admins</a>
    		</li>
		<?php }?>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Us Data</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			<div class="col-12">&nbsp;</div>
			<?php if (isset($message) && !empty($message)) { ?>
				<div class="alert alert-danger alert-dismissible fade show rWhite" role="alert">
 					<?= $message ?>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span class="rWhite" aria-hidden="true">&times;</span>
  					</button>
				</div>
			<?php }?>
			<form method="post" name="userData">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">First Name</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control-plaintext" name="first_name" value="<?= $data["first_name"] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Last Name</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control-plaintext"name="last_name" value="<?= $data["last_name"] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control-plaintext" name="email" value="<?= $data["email"] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control-plaintext" name="username" value="<?= $data["username"] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Phone Number</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control-plaintext" name="phone" value="<?= $data["phone"] ?>">
					</div>
				</div>
				<input type="hidden" name="type" value="update">
				<button type="button" class="btn btn-outline-success" id="btnEdit">Edit</button>
				<button type="submit" class="btn btn-outline-primary" id="btnSave" style="display: none;">Save</button>
			</form>
		</div>
		<?php if($_SESSION["id"] == 1){?>
    		<div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
    			<div class="col-12">&nbsp;</div>
    			<form method="post" name="newAdmin">
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">First Name</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="first_name">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Last Name</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control"name="last_name">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Email</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="email">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Username</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="username">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Password</label>
    					<div class="col-sm-10">
    						<input type="password" class="form-control" name="password">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Phone Number</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="phone">
    					</div>
    				</div>
    				<input type="hidden" name="type" value="insert">
    				<button type="submit" class="btn btn-outline-primary">Save</button>
    			</form>
    		</div>
    		<div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="view-tab">
    			<div class="col-12">&nbsp;</div>
    			<table class="table table-striped">
    				<thead>
    					<tr>
    						<th>Name</th>
    						<th>Username</th>
    						<th>Email</th>
    						<th>Phone</th>
    						<th>Actions</th>
    					</tr>
    				</thead>
    				<tbody>
    					<?php foreach ($admins as $admin) { if($admin["id"] == $_SESSION["id"]){continue;}?>
    					<tr>
    						<td><?= $admin["first_name"]." ".$admin["last_name"]?></td>
    						<td><?= $admin["username"]?></td>
    						<td><?= $admin["email"]?></td>
    						<td><?= $admin["phone"]?></td>
    						<td>
    							<div id="admin_data_<?= $admin["id"]?>" style="display: none;">
    								<input type="hidden" id="first_name" value="<?= $admin["first_name"]?>">
    								<input type="hidden" id="last_name" value="<?= $admin["last_name"]?>">
    								<input type="hidden" id="username" value="<?= $admin["username"]?>">
    								<input type="hidden" id="email" value="<?= $admin["email"]?>">
    								<input type="hidden" id="phone" value="<?= $admin["phone"]?>">
    							</div>
    							<button type="button" class="btn btn-outline-success btn-padding" 
    								data-toggle="modal" data-target="#editModal" data-id="<?= $admin["id"]?>">Edit</button>
    							<button type="button" class="btn btn-outline-danger btn-padding"
    								data-toggle="modal" data-target="#deleteModal" data-id="<?= $admin["id"]?>">Delete</button>
    						</td>
    					</tr>
    					<?php }?>
    				</tbody>
    			</table>
    		</div>
		<?php }?>
		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			<div class="col-12">&nbsp;</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>College</th>
						<th>Course</th>
						<th>Year</th>
						<th>Contact Methods</th>
						<th>Contacted</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($contactData as $contact) {?>
					<tr>
						<td><?= $contact["name"]?></td>
						<td><?= $contact["email"]?></td>
						<td><?= $contact["phone"]?></td>
						<td><?= $contact["college"]?></td>
						<td><?= $contact["course"]?></td>
						<td><?= $contact["year"]?></td>
						<td><?= $contact["contact_method"]?></td>
						<td class="text-center">
							<?php if($contact["contacted"] == 0) {?>
    							<form method="post">
    								<input type="hidden" name="id" value="<?= $contact["id"]?>">
    								<input type="hidden" name="type" value="contact">
    								<button type="submit" class="btn btn-outline-success btn-padding" > &check; </button>
    							</form>
							<?php }else {?>
								Yes
							<?php }?>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" name="userEdit" id="userEdit">
			<div class="form-group">
				<label class="col-form-label">First Name</label>
				<input type="text" class="form-control" name="first_name">
			</div>
			<div class="form-group">
				<label class="col-form-label">Last Name</label>
				<input type="text" class="form-control"name="last_name">
			</div>
			<div class="form-group">
				<label class="col-form-label">Email</label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label class="col-form-label">Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label class="col-form-label">Phone Number</label>
				<input type="text" class="form-control" name="phone">
			</div>
			<input type="hidden" name="type" value="edit">
			<input type="hidden" name="id">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-primary" form="userEdit">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Delete Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="col-12">Are you sure you want to delete admin - <strong></strong> ?</div>
      	<form method="post" name="userDelete" id="userDelete">
			<input type="hidden" name="type" value="delete">
			<input type="hidden" name="id">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-outline-primary" form="userDelete">Yes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

$(function() {
  $('#editModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget)
	  var id = button.data('id');
	  var key = "#admin_data_"+id;
	  var modal = $(this);
	  modal.find('.modal-body input[name=first_name]').val($(key).find("#first_name").val());
	  modal.find('.modal-body input[name=last_name]').val($(key).find("#last_name").val());
	  modal.find('.modal-body input[name=email]').val($(key).find("#email").val());
	  modal.find('.modal-body input[name=username]').val($(key).find("#username").val());
	  modal.find('.modal-body input[name=phone]').val($(key).find("#phone").val());
	  modal.find('.modal-body input[name=id]').val(id);
  });
  $('#deleteModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget)
	  var id = button.data('id');
	  var key = "#admin_data_"+id;
	  var modal = $(this);
	  modal.find('.modal-body strong').html($(key).find("#first_name").val()+" "+$(key).find("#last_name").val());
	  modal.find('.modal-body input[name=id]').val(id);
  });
  $('#btnEdit').click(function(){
	$("form[name='userData'] input").removeAttr("readonly");
	$("form[name='userData'] input").removeClass("form-control-plaintext");  
	$("form[name='userData'] input").addClass("form-control");
	$("#btnEdit").hide("slow");
	$("#btnSave").show("slow");  
  });
  $("form[name='userData']").validate({
    rules: {
      first_name: "required",
      last_name: "required",
      username: {
        required: true,
        minlength: 5
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
        number: true
      }
    },
    messages: {
      first_name: "Please enter your First Name",
      last_name: "Please enter your Last Name",
      username: {
        required: "Please enter your Username",
        minlength: "Username should atleast be 5 characters"
      },
      phone: {
        required: "Please provide a Phone Number",
        minlength: "Your Phone Number must be at least 10 characters long",
        maxlength: "Your Phone Number must be at least 10 characters long",
        number: "Invalid Phone Number"
      },
      email: "Please enter a valid Email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  $("form[name='newAdmin']").validate({
	    rules: {
	      first_name: "required",
	      last_name: "required",
	      username: {
	        required: true,
	        minlength: 5
	      },
	      email: {
	        required: true,
	        email: true
	      },
	      password: {
	        required: true,
	        minlength: 5
	      },
	      phone: {
	        required: true,
	        minlength: 10,
	        maxlength: 10,
	        number: true
	      }
	    },
	    messages: {
	      first_name: "Please enter your First Name",
	      last_name: "Please enter your Last Name",
	      username: {
	        required: "Please enter your Username",
	        minlength: "Username should atleast be 5 characters"
	       },
	      password: {
	        required: "Please provide a Password",
	        minlength: "Your Password must be at least 5 characters long"
	      },
	      phone: {
	        required: "Please provide a Phone Number",
	        minlength: "Your Phone Number must be at least 10 characters long",
	        maxlength: "Your Phone Number must be at least 10 characters long",
	        number: "Invalid Phone Number"
	      },
	      email: "Please enter a valid Email address"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
  $("form[name='userEdit']").validate({
	    rules: {
	      first_name: "required",
	      last_name: "required",
	      username: {
	        required: true,
	        minlength: 5
	      },
	      email: {
	        required: true,
	        email: true
	      },
	      phone: {
	        required: true,
	        minlength: 10,
	        maxlength: 10,
	        number: true
	      }
	    },
	    messages: {
	      first_name: "Please enter your First Name",
	      last_name: "Please enter your Last Name",
	      username: {
	        required: "Please enter your Username",
	        minlength: "Username should atleast be 5 characters"
	      },
	      phone: {
	        required: "Please provide a Phone Number",
	        minlength: "Your Phone Number must be at least 10 characters long",
	        maxlength: "Your Phone Number must be at least 10 characters long",
	        number: "Invalid Phone Number"
	      },
	      email: "Please enter a valid Email address"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
});
</script>