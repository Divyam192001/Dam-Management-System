<?php
	include('../connect.php');
	$id=$_GET['id'];
<<<<<<< HEAD
	$deletquery ="DELETE FROM control WHERE id=$id";
=======
	$deletquery ="DELETE FROM user WHERE id=$id";
>>>>>>> a161f453a215175ed000ba9247ddc11987d12941
	$query= mysqli_query($con,$deletquery);
	// $result->execute();
	
	header("location:userview.php");
?>