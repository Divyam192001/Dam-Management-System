<?php
session_start();
include('../connect.php');
$a = $_POST['type'];
$k = $_POST['name'];
$b = $_POST['inflow'];
$c = $_POST['outflow'];
//$d = $_POST['reserved'];
$e = $_POST['electricity'];
$f = $_POST['description'];

// query




  //do your write to the database filename and other details   
$sql = "INSERT INTO control (type,name,inflow,outflow,electricity,description) VALUES ('$a','$k','$b','$c','$e','$f')";
//$q = $db->prepare($sql);
//$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':e'=>$e,':f'=>$f));

mysqli_query($con, $sql);
header("location: control.php");

	
?>