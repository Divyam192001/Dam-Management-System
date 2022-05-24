<?php
// configuration
include('../connect.php');

// new data
$ids = $_POST['id'];
$a = $_POST['name'];
$h = $_POST['number'];
$b = $_POST['username'];
$c = $_POST['password'];
// query

$sql = "update user 
        SET name='$a',number='$h',username='$b',password='$c'
		WHERE id='$ids'";
        mysqli_query($con, $sql);
//$q = $db->prepare($sql);
//$q->execute(array($a,$h,$b,$c,$id));
header("location: userview.php");

?>