<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$h = $_POST['dno'];

// query

$sql = "UPDATE state 
        SET name=?,dno=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$id));
header("location: state.php");

?>