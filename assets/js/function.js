function errorLogin() {
    $.alert({
        title: 'Login error',
        content: "Invalid login credentials",
    });
}

function logoutConfirm() {
    $.confirm({
	    title: 'Logout',
	    content: 'Are you sure you want to login?',
	    buttons: {
	        confirm: function () {
	            window.location.replace("logout.php");
	        },
	        cancel: function () {
	            //do nothing
	        }
	    }
	});
}

function deactivateConfirm(user_id) {
    $.confirm({
	    title: 'Deactivate',
	    content: 'Are you sure you want to deactivate this user?',
	    buttons: {
	        confirm: function () {
	            $.ajax({
			      url: "deactivate_user.php?id=" + user_id
			    }).done(function(data) {
			      console.log(data);
			      deactivateUserSuccess();
			    });
	        },
	        cancel: function () {
	            //do nothing
	        }
	    }
	});
}

function activateConfirm(user_id) {
    $.confirm({
	    title: 'Activate',
	    content: 'Are you sure you want to activate this user?',
	    buttons: {
	        confirm: function () {
	            $.ajax({
			      url: "activate_user.php?id=" + user_id
			    }).done(function(data) {
			      console.log(data);
			      activateUserSuccess();
			    });
	        },
	        cancel: function () {
	            //do nothing
	        }
	    }
	});
}

function updateProfileSuccess() {
    $.alert({
        title: 'Profile',
        content: "Details updated successfully",
    });
}

function changePassWrongPass() {
    $.alert({
        title: 'Change password',
        content: "Incorrect old password",
    });
}

function changePassRepeatPassDoesntMatch() {
    $.alert({
        title: 'Change password',
        content: "New password and repeat input does not match",
    });
}

function updatePassSuccess() {
    $.alert({
        title: 'Profile',
        content: "Password updated successfully",
    });
}

function addUserSuccess() {
    $.alert({
        title: 'Add user',
        content: "User added successfully",
    });
}

function addUserError() {
    $.alert({
        title: 'Add user',
        content: "Username or contact number already exists",
    });
}

function editUserError() {
    $.alert({
        title: 'Edit user',
        content: "Username or contact number already used by another account",
    });
}

function UpdateProfileError() {
    $.alert({
        title: 'Edit user',
        content: "Contact number already used by another account",
    });
}

function editUserSuccess() {
    $.alert({
        title: 'Edit user',
        content: "User edited successfully",
    });
}

function deactivateUserSuccess() {
    $.alert({
        title: 'Deactivate user',
        content: "User has been deactivated",
    });

    var counter = 0;
	var interval = setInterval(function() {
	    counter++;
	    
	    if (counter == 5) {
	        clearInterval(interval);
	        location.reload(true);
	    }
	}, 500);
}

function activateUserSuccess() {
    $.alert({
        title: 'Activate user',
        content: "User has been Activated",
    });

    var counter = 0;
	var interval = setInterval(function() {
	    counter++;
	    
	    if (counter == 5) {
	        clearInterval(interval);
	        location.reload(true);
	    }
	}, 500);
}

function viewBookingInquiry(handled_by, id, lname, fname, mname, address, email, cellphonenumber, homenumber, servicetype, area_sqm, rough_estimate, invoice, date_inquired, status) {
	$.confirm({
	    title: 'View booking inquiry #' + invoice,
	    content: '' +
	    '<div class="well">' +
	    	'<h4>Personal details</h4>' +
	    	'Name: ' + fname + ' ' + mname + ' ' + lname + 
	    '</div>' +
	    '<div class="well">' +
	    	'<h4>Residential details</h4>' +
	    	'Address: ' + address +
	    '</div>' +
	    '<div class="well">' +
	    	'<h4>Contact details</h4>' +
	    	'Email: ' + email + '<br>' +
	    	'Cellphone number: ' + cellphonenumber + '<br>' +
	    	'Home number: ' + homenumber +
	    '</div>' +
	    '<div class="well">' +
	    	'<h4>MAPECON Service</h4>' +
	    	'Service: ' + servicetype + '<br>' +
	    	'Area: ' + area_sqm + '<br>' +
	    	'Grand total: ' + rough_estimate + '<br>' +
	    	'Date inquired: ' + date_inquired +
	    	'<input type="text" placeholder="Your name" class="name form-control" required />' +
	    '</div>' +
	    '<form>' +
	    '</form>',
	    buttons: {
	        Approve: function () {
	            $.confirm({
				    title: 'Approve',
				    content: 'Are you sure you want to approve this inquiry?',
				    buttons: {
				        confirm: function () {
				            $.ajax({
						      url: "approve_booking_inquiry.php?id=" + id + '&handled_by=' + handled_by
						    }).done(function(data) {
						      console.log(data);
						      approvedInquiry();
						    });
				        },
				        cancel: function () {
				            //do nothing
				        }
				    }
				});
	        },
	        Cancel: {
	            text: 'Decline',
	            action: function () {
	                $.confirm({
					    title: 'Decline',
					    content: 'Are you sure you want to decline this inquiry?',
					    buttons: {
					        confirm: function () {
					            $.ajax({
							      url: "decline_booking_inquiry.php?id=" + id + '&handled_by=' + handled_by
							    }).done(function(data) {
							      console.log(data);
							      declineInquiry();
							    });
					        },
					        cancel: function () {
					            //do nothing
					        }
					    }
					});
	            }
	        },
	        Close: function () {
	            //close
	        },
	    }
	});
}

function approvedInquiry() {
    $.alert({
        title: 'Booking inquiry',
        content: "Inquiry has been approved",
    });

    var counter = 0;
	var interval = setInterval(function() {
	    counter++;
	    
	    if (counter == 5) {
	        clearInterval(interval);
	        location.reload(true);
	    }
	}, 500);
}

function declineInquiry() {
    $.alert({
        title: 'Booking inquiry',
        content: "Inquiry has been declined",
    });

    var counter = 0;
	var interval = setInterval(function() {
	    counter++;
	    
	    if (counter == 5) {
	        clearInterval(interval);
	        location.reload(true);
	    }
	}, 500);
}


function compute(service, square_meter) {
	switch(service) {
		case 'Bukbok Abatement Maintenance Program':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Drilling':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Fogging':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Fugimation':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Garden Spray':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'General Pest Abatement Maintenance Program':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Mound Demolition':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Rat Abatement Maintenance Program':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Soil Treatment':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Termite Abatement Maintenance Program':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
		case 'Wood Drenching':
			var price = 8000;
			if(square_meter <= 40) {
				price = (8000 * square_meter) / 40;
			} else if(square_meter <= 40) {
				price = (9000 * square_meter) / 50;
			} else if(square_meter <= 50) {
				price = (10000 * square_meter) / 60;
			} else if(square_meter <= 60) {
				price = (12000 * square_meter) / 70;
			} else if(square_meter <= 70) {
				price = (13000 * square_meter) / 80;
			} else if(square_meter <= 90) {
				price = (14000 * square_meter) / 90;
			} else if(square_meter <= 100) {
				price = (15000 * square_meter) / 100;
			} else if(square_meter <= 110) {
				price = (16000 * square_meter) / 110;
			} else {
				price = (17000 * square_meter) / 120;
			}
			return price;
			break;
	}
}