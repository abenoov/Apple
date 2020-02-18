<?php
include "../../connect.php";

$id = $_POST["id"];


$connection->query("DELETE FROM blogs WHERE id= $id");

echo true;

?>