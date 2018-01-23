<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

include("mysqlcon.php");

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$info = $_REQUEST['data'];
	$data = json_decode($info);
	$evt_type = $data->evt_type;
	$evt_date = $data->evt_date;
	$evt_qty = $data->evt_qty;
	$evt_price = $data->evt_price;

	$evt_remarks = $data->evt_remarks;

	$evt_id = $data->evt_id;
	$comma = false;

	$qrystr = "update event set ";
	if ($evt_type <> "") {
		$qrystr = $qrystr."evt_type='".$evt_type."'";
		$comma = true;
	}
	if ($evt_date <> "") {
		if ($comma)
			$qrystr = $qrystr.",evt_date='".$evt_date."'";
		else
			$qrystr = $qrystr."evt_date='".$evt_date."'";
		$comma = true;
	}
	if ($evt_qty <> "") {
		if ($comma)
			$qrystr = $qrystr.",evt_qty=".$evt_qty;
		else
			$qrystr = $qrystr."evt_qty=".$evt_qty;
		$comma = true;
	}
	if ($evt_price <> "") {
		if ($comma)
			$qrystr = $qrystr.",evt_price=".$evt_price;
		else
			$qrystr = $qrystr."evt_price=".$evt_price;
		$comma = true;
	}
	if ($evt_remarks <> "") {
		if ($comma) 
			$qrystr = $qrystr.",evt_remarks='".$evt_remarks."'";
		else
			$qrystr = $qrystr."evt_remarks='".$evt_remarks."'";
	}
	
	$qrystr = $qrystr." where evt_id=".$evt_id;
	
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
