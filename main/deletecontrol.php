<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM control WHERE name= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header ("location: control.php");
?>
