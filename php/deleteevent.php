<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

include("mysqlcon.php");

	$info = $_REQUEST['data'];
	$data = json_decode($info);


	$evt_id = $data->evt_id;
	
	$querystring = sprintf("delete from event where evt_id = %s",
	$evt_id
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

?>
