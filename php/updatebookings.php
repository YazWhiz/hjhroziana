<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

include("mysqlcon.php");

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$info = $_REQUEST['data'];
	$myObj = json_decode($info);
	$book_id = $myObj->book_id;
	$order_qty = $myObj->order_qty;
	$delivery_time = $myObj->delivery_time;
	$comma = false;

	$qrystr = "update booking set ";
	if ($order_qty <> "") {
		$qrystr = $qrystr."order_qty='".$order_qty."'";
		$comma = true;
	}
	if ($delivery_time <> "") {
		if ($comma)
			$qrystr = $qrystr.",delivery_time='".$delivery_time."'";
		else
			$qrystr = $qrystr."delivery_time='".$delivery_time."'";
		$comma = true;
	}
	
	$qrystr = $qrystr." where book_id=".$book_id;
	
	$mysqli->query($qrystr);

	$json = json_encode(array(
		"sql" => $qrystr,
		"success" => true
	));
	
	echo isset($_GET['callback'])
	? "{$_GET['callback']}($json)"
	: $json;
			
	$mysqli->close();

}
?>
