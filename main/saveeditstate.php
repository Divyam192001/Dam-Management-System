<?php
// configuration
include('../connect.php');

// new data
$ids = $_POST['id'];
$a = $_POST['name'];
$h = $_POST['dno'];

// query
$sql = "update state 
        SET name='$a', dno='$h'
		WHERE id='$ids'";
        mysqli_query($con, $sql);

//$q = $db->prepare($sql);
//$q->execute(array($a,$h,$id));
header("location: state.php");

?>