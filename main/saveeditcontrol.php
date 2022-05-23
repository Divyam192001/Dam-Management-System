<?php
  session_start();
  include("../connect.php");
  include("../functions.php");
// new data

if($_SERVER['REQUEST_METHOD']== "POST")
{
  $name = $_POST['name'];
  $inflow = $_POST['inflow'];
  $outflow = $_POST['outflow'];
  $reserved = $_POST['reserved'];
  $electricity = $_POST['electricity'];
  //$description = $_POST['description'];

  if(empty($name) && !empty($inflow) && !empty($outflow) && empty($reserved) && !empty($electricity) && !empty($description) && !is_numeric($name))
  {
    //$user_id = random_num(20);
    //$query = "insert into control(name,inflow,outflow,reserved,electricity) values('$name','$inflow','$outflow','$reserved','$electricity')";
    $sql = "UPDATE control 
        SET inflow=?,outflow=?, electricity=?, Description=?
		WHERE id=?";
$q = $con->prepare($sql);
$q->execute(array($inflow,$outflow,$electricity,$id));
header("location: control.php");

    //mysqli_query($con, $query);

   // header("location: main/control.php");
    die;
  }
  else
  {
    echo "Please enter some valid information";
  }
}

/*

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
*/
?>