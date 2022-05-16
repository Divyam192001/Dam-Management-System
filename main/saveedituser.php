<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$h = $_POST['number'];
$b = $_POST['username'];
$c = $_POST['password'];
// query

$sql = "UPDATE user 
        SET name=?,number=?,username=?,password=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$c,$id));
header("location: userview.php");

?>