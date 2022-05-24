<?php
	include('../connect.php');
	$name=$_GET['name'];
	$deletquery ="DELETE FROM control WHERE name=$name";
	$query= mysqli_query($con,$deletquery);
	// $result->execute();
	
	header("location:userview.php");
?>