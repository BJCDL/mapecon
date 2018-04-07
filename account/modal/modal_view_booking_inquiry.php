<div class="modal fade modal-primary" id="viewBookingInquiry_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View booking inquiry: <?php echo $row['invoice']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="well">
      		<h4>Personal details</h4>
      		Name: <?php echo $row['fname'] . " " . $row['mname'] .  " "  . $row['lname']; ?>
      	</div>
      	<div class="well">
      		<h4>Residential details</h4>
      		Address: <?php echo $row['address']; ?>
      	</div>
      	<div class="well">
      		<h4>Contact details</h4>
      		Email: <?php echo $row['email']; ?><br>
      		Cellphone number: <?php echo $row['cellphonenumber']; ?><br>
      		Home number: <?php echo $row['homenumber']; ?>
      	</div>
      	<div class="well">
      		<h4>MAPECON Service</h4>
      		Service: <?php echo $row['servicetype']; ?> sqm.<br>
      		Grand total: <?php echo number_format($row['rough_estimate']); ?>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" name="edituser" class="btn btn-info btn-fill">Save changes</button>
      </div>
    </div>
  </div>
</div>