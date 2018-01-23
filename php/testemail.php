<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


$contact = "nnnnn";
$email = "email";
$fullname = "Muhammad Yazid";
$enquiry = "Testing 1 2 3";	
$from = "email";
	
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Catering <email>' . "\r\n";

$to = "<email>".$email;
	$subject = "Wedding Catering Booking Enquiries";

$message = '
	<html>
	<head>
	  <title>Wedding Catering Booking Enquiries</title>
	</head>
	<body>
	  <p>Hi,</p>
	  <table rules="all" style="border-color: #666;" cellpadding="10" border="1" width="100%">
	  <tr>
	      <td style="background: #eee;"><strong>About</strong></td><td>'.$subject.'</td>
	    </tr>
	    <tr>
	      <td style="background: #eee;"><strong>Full Name</strong></td><td>'.$fullname.'</td>
	    </tr>
	    <tr>
	      <td style="background: #eee;"><strong>Contact</strong></td><td>'.$contact.'</td>
	    </tr>
	    <tr>
	      <td style="background: #eee;"><strong>Email</strong></td><td>'.$email.'</td>
	    </tr>
	    <tr>
	      <td style="background: #eee;"><strong>Enquiry</strong></td><td>'.$enquiry.'</td>
	    </tr>
		<tr>
	      <td style="background: #eee;"><strong>Send From</strong></td><td>'.$from.'</td>
	    </tr>
	  </table>
	</body>
	</html>
	';

// In case any of our lines are larger than 70 characters, we should use wordwrap()

$message = wordwrap($message, 70, "\r\n");
// Send
$ret = mail($to, $subject, $message, $headers);
if ($ret) {
	print "Mail sent successfully";
} else {
	print "Error Send Mail";
	print_r(error_get_last());
}

?>