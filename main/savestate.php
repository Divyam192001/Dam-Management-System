<?php
session_start();
include('../connect.php');
$a = $_POST['id'];
$k = $_POST['name'];
$b = $_POST['dno'];


// query




    /* check if the file uploaded successfully */


  //do your write to the database filename and other details   
$sql = "INSERT INTO state (id,name,dno) VALUES (:a,:k,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b));
header("location: state.php");

	
?>