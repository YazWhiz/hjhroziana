<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');
include("mysqlcon.php");

if ($_SERVER['REQUEST_METHOD']=='POST') {

	$myreq = $_REQUEST['ajax_req'];
	$myObj = json_decode($_REQUEST['ajax_req']);
	
	$fullname = $myObj->fullname;
	$email = $myObj->email;
	$contact = $myObj->contact;
	$evt_id = $myObj->evt_id;
	$address = $myObj->address;
	$qty = $myObj->qty;
	$deliverytime = $myObj->dtime;	
	
	
	$querystring = sprintf("insert into booking(evt_id,cust_name,cust_addr,cust_email,cust_contact,delivery_time,order_qty) values('%s','%s','%s','%s','%s','%s','%s')",
	$evt_id,
	$fullname,
	$address,
	$email,
	$contact,
	$deliverytime,
	$qty
	);
	
	$mysqli->query($querystring);
	
	$json = json_encode(array(
	"sql" => $querystring,
	"success" => true
	));
		
	echo isset($_GET['callback'])
	? "{$_GET['callback']}($json)"
	: $json;
	
	
	// Send Email Confirmation
	$qry = sprintf("select * from event where evt_id='%s'",$evt_id);
	$result = $mysqli->query($qry);
	while ($obj = $result->fetch_object())
	{
	  $evt_type=$obj->evt_type;
	  $evt_date=date_format(date_create($obj->evt_date), 'l jS F Y');
	  $evt_price=$obj->evt_price;
	  $evt_remarks=$obj->evt_remarks;
	}
	$enquiry = $myObj->eventdate;
	
	$result->close();
	$mysqli->close();
	
	$from = "<email>";
	
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Catering <email>' . "\r\n";
	
	$to = "<email>".$email;
	if ($evt_type == "ALMADANI") {
		$subject = "Booking Confirmation for Nasi Al Madani on ".$evt_date;
	} elseif ($evt_type == "AMBENG") {
		$subject = "Booking Confirmation for Nasi Ambeng on ".$evt_date;
	} elseif ($evt_type == "LAUKRAYA") {
		$subject = "Booking Confirmation for Lauk Raya on ".$evt_date;
	}
	
	$message = '
	<html>
	<head>
	<title>'.$subject.'</title>
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
	<td style="background: #eee;"><strong>Order Qty</strong></td><td>'.$qty.'</td>
	</tr>	
	<tr>
	<td style="background: #eee;"><strong>Order Detail</strong></td><td>'.$evt_remarks.'</td>
	</tr>
	<tr>
	<td style="background: #eee;"><strong>Order Remarks</strong></td><td>'.$deliverytime.'</td>
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
	
	/*
	if ($ret) {
	print "Mail sent successfully";
	} else {
	print $fullname;
	print "Error Send Mail";
	print_r(error_get_last());
	}
	*/
}

?>
