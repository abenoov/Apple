<?php
	include "../../connect.php";
	#Проверки ....
	#......
	#.....
	#.....
	$title = $_POST["title"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$img_path = NULL;
	if(isset($_FILES["image"])&&isset($_FILES["image"]["name"])) {

		$temp = explode(".", $_FILES["image"]["name"]);

		$file_name = time().'.'.end($temp);
		move_uploaded_file( $_FILES["image"]["tmp_name"], "../../img/".$file_name);

		$img_path = "img/".$file_name;
	}

	$connection->query("INSERT INTO blogs (title, description, price, img) VALUES ('$title', '$description', '$price', '$img_path')");

	echo true;

?>