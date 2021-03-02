<?php
	require 'config.php';

	function checkUser($name){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT name from login where name = :name");
  	$statement->bindParam(":name", $name);
  	$statement->execute();
	return $statement->fetch();
  	$conn= null;
}

function user($name){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT name from login where name = :name");
	$statement->bindParam(":name", $name);
	$statement->execute();

	
	
	
	return $statement->fetch();
	$conn = null;
}
?>