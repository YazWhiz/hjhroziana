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

	$querystring = sprintf("insert into event(evt_type,evt_date,evt_qty,evt_price,evt_remarks) values('%s','%s',%s,'%s','%s')",
	$evt_type,
	$evt_date,
	$evt_qty,
	$evt_price,
	$evt_remarks
	);

	$mysqli->query($querystring);

	$json = json_encode(array(
		"sql" => $querystring,
		"success" => true
	));
	
	echo isset($_GET['callback'])
	? "{$_GET['callback']}($json)"
	: $json;
			
	$mysqli->close();

}
?>
