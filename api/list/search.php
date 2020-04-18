<?php
	include "../../connect.php";

	$key = $_GET["key"];

	$query = $connection->query("SELECT * FROM blogs WHERE title LIKE '%$key%' OR description LIKE '%$key%' ORDER BY date DESC");

	$res = array();
	if($query->num_rows > 0) {
		while ($row = $query -> fetch_object()) {
			# code...сокет процесс
			$res[] = array(
				"id"=>$row->id,
				"title"=>$row->title,
				"description"=>$row->description,
				"price"=>$row->price,
				"date"=>$row->date
			);
		}
	}

	echo json_encode($res);
?>