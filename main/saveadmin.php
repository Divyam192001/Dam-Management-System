<?php
session_start();
include('../connect.php');
$a = $_POST['id'];
$k = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];
// query


  //do your write to the database filename and other details   
$sql = "INSERT INTO admin (id,name,email,username,password) VALUES ('$a','$k','$b','$c','$d')";

mysqli_query($con, $sql);

//$q = $db->prepare($sql);
//$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d));
header("location: admin.php");

?>