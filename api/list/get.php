<?php

include "../../connect.php";
$page = 1;



if (isset($_GET["page"])) {
	# code...
	$page = $_GET["page"];
}
$limit = 10;
$skip = ($page - 1)*$limit;



$query = $connection->query("SELECT * FROM blogs ORDER BY date DESC ");

$res = array();
if($query->num_rows > 0) {
	while ($row = $query -> fetch_object()) {
		# code...сокет процесс
		$res[] = array(
			"id"=>$row->id,
			"title"=>$row->title,
			"description"=>$row->description,
			"price"=>$row->price,
			"date"=>$row->date,
			"img"=>$row->img
		);
	}
}

	echo json_encode($res);


?>