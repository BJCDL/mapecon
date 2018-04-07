<div class="modal fade" id="editUser_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit user: <?php get_profile_fullname($con, $row['id']); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post">
      		<input type="hidden" name="edit_user_id" value="<?php echo $row['id']; ?>">
		<div class="row">
		    <div class="col-md-6 pr-1">
		        <div class="form-group">
		            <label>First Name</label>
		            <input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $row['fname']; ?>" required>
		        </div>
		    </div>
		    <div class="col-md-6 pl-1">
		        <div class="form-group">
		            <label>Last Name</label>
		            <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $row['lname']; ?>" required>
		        </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-12">
		        <div class="form-group">
		            <label>Address</label>
		            <input type="text" class="form-control" placeholder="Home Address" name="address" value="<?php echo $row['address']; ?>" required>
		        </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-6 pl-1">
		        <div class="form-group">
		            <label>Contact number</label>
		            <input type="text" class="form-control" placeholder="Cellphone number" name="cellphonenumber" value="<?php echo $row['contactnumber']; ?>" required>
		        </div>
		    </div>
		    <div class="col-md-6 pr-1">
		        <div class="form-group">
		            <label>Account type</label>
		            <select name="accounttype" class="form-control" required>
		                <option value="">--SELECT--</option>
		                <option value="Administrator" <?php if ($row['accounttype'] == "Administrator") echo "selected=\"selected\""; ?>>Administrator</option>
		                <option value="Technician" <?php if ($row['accounttype'] == "Technician") echo "selected=\"selected\""; ?>>Technician</option>
		                <option value="Accounting" <?php if ($row['accounttype'] == "Accounting") echo "selected=\"selected\""; ?>>Accounting</option>
		                <option value="Service-staff" <?php if ($row['accounttype'] == "Service-staff") echo "selected=\"selected\""; ?>>Service-staff</option>
		                <option value="Agent" <?php if ($row['accounttype'] == "Agent") echo "selected=\"selected\""; ?>>Agent</option>
		            </select>
		        </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-6 pr-1">
		        <div class="form-group">
		            <label>Username</label>
		            <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $row['username']; ?>" required>
		        </div>
		    </div>
		    <div class="col-md-6 pl-1">
		        <div class="form-group">
		            <label>Password</label>
		            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $row['password']; ?>" required>
		        </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-12">
		    	<?php if ($row['status'] == 1): ?>
		        	<a href="#" onclick="deactivateConfirm(<?php echo $row['id']; ?>)">Deactivate</a>
		    	<?php else: ?>
		    		<a href="#" onclick="activateConfirm(<?php echo $row['id']; ?>)">Activate</a>
		    	<?php endif; ?>
		    </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" name="edituser" class="btn btn-info btn-fill">Save changes</button>
    	</form>
      </div>
    </div>
  </div>
</div>