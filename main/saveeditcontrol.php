<?php
// configuration
include('../connect.php');

// new data
$ids = $_POST['id'];

$a = $_POST['name'];
$h = $_POST['inflow'];
$b = $_POST['outflow'];
$c = $_POST['reserved'];
$d = $_POST['electricity'];
$e = $_POST['description'];

// query

$sql = "update control 
        SET name='$a',inflow='$h',outflow='$b',reserved='$c', electricity='$d', description='$e'
		WHERE id='$ids'";
//$q = $db->prepare($sql);
//$q->execute(array($h,$b,$d,$e,$id));
mysqli_query($con, $sql);
header("location: usercontrol.php");

?>

