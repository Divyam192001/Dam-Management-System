<?php
session_start();
include('../connect.php');
$a = $_POST['id'];
$k = $_POST['name'];
$b = $_POST['year'];
$c = $_POST['type'];
$d = $_POST['capacity'];
$e = $_POST['place'];
$f = $_POST['built'];

// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
$sql = "INSERT INTO dams (id,name,year,type,capacity,place,built,file) VALUES (:a,:k,:b,:c,:d,:e,:f,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':h'=>$file_name_new));
header("location: dams.php");

	}
?>