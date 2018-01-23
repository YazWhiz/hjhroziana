<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

include("mysqlcon.php");

//$evttype = $_REQUEST['evttype'];
$myArray = array();
//$querystring = "select * from event where evt_type = '".$evttype."'";

$querystring = "SELECT a.evt_id, a.evt_type, a.evt_date, a.evt_qty, a.evt_price,sum(b.order_qty) as qtybook, (a.evt_qty-sum(b.order_qty)) as bal, a.evt_remarks  FROM event a left outer join booking b on a.evt_id = b.evt_id where a.evt_date >= DATE_ADD(CURDATE(), INTERVAL 1 DAY) group by a.evt_date asc, a.evt_id";

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
