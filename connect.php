<?php
	
	$connection = mysqli_connect('localhost', 'root', '', 'apple');
	
	$select_db = mysqli_select_db($connection, 'apple');
?>