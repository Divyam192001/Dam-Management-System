<?php
	include('../connect.php');
	$id=$_GET['id'];
	$deletquery ="DELETE FROM control WHERE id=$id";
	$query= mysqli_query($con,$deletquery);
	// $result->execute();
	
	header("location:userview.php");
?>