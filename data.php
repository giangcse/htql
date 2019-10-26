<?php
header('Content-Type: application/json');

include 'sql_conn.php';

$sqlQuery = "SELECT SUM(quantity) AS quantity, product FROM bill_detail GROUP BY product";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>