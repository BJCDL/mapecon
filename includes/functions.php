<?php

function login($con, $username, $password) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE BINARY username = '$username' AND BINARY password = '$password'");
	$check = mysqli_num_rows($query);
	if ($check > 0) {
		session_start();
		$profile = mysqli_fetch_array($query);
		$accounttype = $profile['accounttype'];
		$_SESSION['CURRENT_ID'] = $profile['id'];

		switch ($accounttype) {
			case 'Administrator':
				$_SESSION['ACCOUNTTYPE'] = $profile['accounttype'];
				header('Location: account');
				break;
			case 'Agent':
				$_SESSION['ACCOUNTTYPE'] = $profile['accounttype'];
				header('Location: account/booking-inquiry.php');
				break;
		}
	} else {
		$alert = "<script>errorLogin();</script>";
		return $alert;
	}	
}

function get_profile_fullname($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['fname'] . " " . $display_profile['lname'];
}

function get_profile_firstname($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['fname'];
}

function get_profile_lastname($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['lname'];
}

function get_profile_username($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['username'];
}

function get_profile_password($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	return $display_profile['password'];
}

function get_profile_accounttype($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['accounttype'];
}

function get_profile_contactnumber($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['contactnumber'];	
}

function get_profile_address($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['address'];
}

function get_profile_status($con, $user_id) {
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'");
	$display_profile = mysqli_fetch_array($query);
	echo $display_profile['status'];
}

function generate_invoice($con) {
	$year_now = date("Y");
	$month_now = date("m");
	$day_now = date("d");
	$customer_id = mysqli_num_rows(mysqli_query($con, "SELECT * FROM customer"));
	$transaction_id = mysqli_num_rows(mysqli_query($con, "SELECT * FROM booking_inquiry"));

	$invoice = $year_now . $month_now . $day_now . ($customer_id + 1) . ($transaction_id + 1);

	return $invoice;
}

function insert_customer($con, $invoice, $fname, $mname, $lname, $address, $email, $cellphonenumber, $homenumber) {
	mysqli_query($con, "INSERT INTO customer(invoice, lname, fname, mname, address, email, cellphonenumber, homenumber)
        VALUES('$invoice', '$lname', '$fname', '$mname', '$address', '$email', '$cellphonenumber', '$homenumber')");
}

function insert_booking_inquiry($con, $invoice, $servicetype, $area_sqm, $rough_estimate, $date_inquired) {
	mysqli_query($con, "INSERT INTO booking_inquiry(invoice, servicetype, area_sqm, rough_estimate, date_inquired)
        VALUES('$invoice', '$servicetype', '$area_sqm', '$rough_estimate', '$date_inquired')");
}

function update_profile($con, $fname, $lname, $contactnumber, $address, $user_id) {
	$check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE (contactnumber = '$contactnumber' AND id <> '$user_id')"));

	if ($check > 0) {
		$alert = "<script>UpdateProfileError();</script>";
		return $alert;
	} else {
		mysqli_query($con, "UPDATE users SET fname = '$fname', lname = '$lname', contactnumber = '$contactnumber', address = '$address'
		WHERE id = '$user_id'");
		$alert = "<script>updateProfileSuccess();</script>";
		return $alert;
	}
}

function change_password($con, $password, $user_id) {
	mysqli_query($con, "UPDATE users SET password = '$password' WHERE id = '$user_id'");
	$alert = "<script>updatePassSuccess();</script>";
	return $alert;
}

function add_user($con, $fname, $lname, $username, $password, $accounttype, $contactnumber, $address) {
	$check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE username = '$username' OR contactnumber = '$contactnumber'"));

	if ($check > 0) {
		$alert = "<script>addUserError();</script>";
		return $alert;
	} else {
		mysqli_query($con, "INSERT INTO users(fname, lname, username, password, accounttype, contactnumber, address)
        	VALUES('$fname', '$lname', '$username', '$password', '$accounttype', '$contactnumber', '$address')");
		$alert = "<script>addUserSuccess();</script>";
		return $alert;
	}
}

function displayUsers($con) {
	$query = mysqli_query($con, "SELECT * FROM users");
	while ($row = mysqli_fetch_array($query)) {
		echo "<tr>";
			echo "<td>" . $row['fname'] . " " . $row['lname'] . "</td>";
			echo "<td>" . $row['accounttype'] . "</td>";
			echo "<td><a href=\"#\" class=\"btn btn-primary btn-fill\" data-toggle=\"modal\" data-target=\"#editUser_". $row['id'] ."\">Edit</a></td>";
		echo "</tr>";
		include('modal/modal_edit_user.php');
	}
}

function edit_user($con, $fname, $lname, $username, $password, $accounttype, $contactnumber, $address, $user_id) {
	$check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE (username = '$username' AND id <> '$user_id') OR (contactnumber = '$contactnumber' AND id <> '$user_id')"));

	if ($check > 0) {
		$alert = "<script>editUserError();</script>";
		return $alert;
	} else {
		mysqli_query($con, "UPDATE users SET fname = '$fname', lname = '$lname', username = '$username', password = '$password', accounttype = '$accounttype', contactnumber = '$contactnumber', address = '$address' WHERE id = '$user_id'");
		$alert = "<script>editUserSuccess();</script>";
		return $alert;
	}
}

function deactivate_user($con, $user_id) {
	mysqli_query($con, "UPDATE users SET status = 0 WHERE id = '$user_id'");
	$alert = "<script>deactivateUserSuccess();</script>";
	return $alert;
}

function activate_user($con, $user_id) {
	mysqli_query($con, "UPDATE users SET status = 1 WHERE id = '$user_id'");
	$alert = "<script>activateUserSuccess();</script>";
	return $alert;
}

function displayInquiry($con) {
	$query = mysqli_query($con, "SELECT bi.id, c.lname, c.fname, c.mname, c.address, c.email, c.cellphonenumber, c.homenumber, bi.invoice, bi.servicetype, bi.area_sqm, bi.rough_estimate, bi.date_inquired, bi.status FROM customer c INNER JOIN booking_inquiry bi ON c.invoice = bi.invoice");
	while ($row = mysqli_fetch_array($query)) {
		$status = $row['status'];
		switch ($status) {
			case 'Pending':
				$class = "text-info";
				break;
			case 'Declined':
				$class = "text-warning";
				break;
			case 'Approved':
				$class = "text-success";
				break;
		}
		echo "<tr>";
			echo "<td>" . $row['invoice'] . "</td>";
			echo "<td>" . $row['fname'] . " " . $row['mname'] . " " . $row['lname'] . "</td>";
			echo "<td>" . $row['servicetype'] . "</td>";
			echo "<td class=\"" . $class . "\">" . $row['status'] . "</td>";
			if ($status == 'Pending') {
				echo "<td><a href=\"#\" class=\"btn btn-primary btn-fill\" onclick=\"viewBookingInquiry(".$_SESSION['CURRENT_ID'].", ".$row['id'].", '".$row['lname']."', '".$row['fname']."', '".$row['mname']."', '".$row['address']."', '".$row['email']."', '".$row['cellphonenumber']."', '".$row['homenumber']."', '".$row['servicetype']."', '".$row['area_sqm']." sqm', 'PHP ".number_format($row['rough_estimate'])."', '".$row['invoice']."', '".date("Y-m-d", strtotime($row['date_inquired']))."')\">Edit</a></td>";
			} else {
				echo "<td><a href=\"#\" class=\"btn btn-default btn-fill\">View</a></td>";
			}
		echo "</tr>";
	}
}

function approve_booking_inquiry($con, $user_id, $handled_by) {
	mysqli_query($con, "UPDATE booking_inquiry SET status = 'Approved', handled_by = '$handled_by' WHERE id = '$user_id'");
	$alert = "<script>approvedInquiry();</script>";
	return $alert;
}

function decline_booking_inquiry($con, $user_id, $handled_by) {
	mysqli_query($con, "UPDATE booking_inquiry SET status = 'Declined', handled_by = '$handled_by' WHERE id = '$user_id'");
	$alert = "<script>approvedInquiry();</script>";
	return $alert;
}

function log_activity($con, $activity, $actionby, $logdate) {
	mysqli_query($con, "INSERT INTO activity_logs(activity, actionby, logdate) 
		VALUES('$activity', '$actionby', '$logdate')");
}