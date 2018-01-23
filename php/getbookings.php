<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

include("mysqlcon.php");

$evtid = $_REQUEST['evtid'];
$myArray = array();
//$querystring = "select * from event where evt_type = '".$evttype."'";

$querystring = "SELECT * from booking where evt_id = ".$evtid;

if ($result = $mysqli->query($querystring)) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    //echo json_encode($myArray);
	$json = json_encode(array(
		"success" => mysql_errno() == 0,
		"data" => $myArray
	));
	
	echo isset($_GET['callback'])
		? "{$_GET['callback']}($json)"
		: $json;	
}

$mysqli->close();
?>
