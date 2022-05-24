<?php
// configuration
include('../connect.php');

// new data
$ids = $_POST['id'];
$a = $_POST['name'];
//$h = $_POST['last_name'];
$b = $_POST['built'];
$c = $_POST['capacity'];
$d = $_POST['place'];
$e = $_POST['year'];
//$f = $_POST['student_id'];
$g = $_POST['type'];
// query

$sql = "update dam 
        SET name='$a',built='$b', capacity='$c', place='$d', year='$e',type='$g'
		WHERE id='$ids'";
        mysqli_query($con, $sql);
//$q = $db->prepare($sql);
//q->execute(array($a,$b,$c,$d,$e,$g,$id));
header("location: dams.php");

?>