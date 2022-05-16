<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
//$h = $_POST['last_name'];
$b = $_POST['built'];
$c = $_POST['capacity'];
$d = $_POST['place'];
$e = $_POST['year'];
//$f = $_POST['student_id'];
$g = $_POST['type'];
// query

$sql = "UPDATE dams 
        SET name=?,built=?, capacity=?, place=?, year=?,type=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$g,$id));
header("location: dams.php");

?>