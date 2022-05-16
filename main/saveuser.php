<?php
session_start();
include('../connect.php');
//$a = $_POST['id'];
$k = $_POST['name'];
//$e = $_POST['email'];
$b = $_POST['number'];
$c = $_POST['username'];
$d = $_POST['password'];
// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
$sql = "INSERT INTO user (name,number,username,password,file) VALUES (:k,:b,:c,:d,:h)";
$q = $db->prepare($sql);
$q->execute(array(':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':h'=>$file_name_new));
header("location: userview.php");

	}
?>