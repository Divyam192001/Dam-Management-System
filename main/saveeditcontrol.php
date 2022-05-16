<?php
// configuration
include('../connect.php');

// new data

$id = $_POST['name'];
$h = $_POST['inflow'];
$b = $_POST['outflow'];

$d = $_POST['electricity'];
$e = $_POST['Description'];

// query

$sql = "UPDATE control 
        SET inflow=?,outflow=?, electricity=?, Description=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($h,$b,$d,$e,$id));
header("location: control.php");

?>