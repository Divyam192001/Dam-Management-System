<?php
  session_start();
  include("connect.php");
  include("functions.php");
  if($_SERVER['REQUEST_METHOD']== "POST")
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $number = $_POST['number'];

    if(!empty($username) && !empty($password) && !empty($name) && !empty($number) && !is_numeric($username) && !is_numeric($name))
    {
      $user_id = random_num(20);
      $query = "insert into user(user_id, username,password,name,number) values('$user_id', '$username','$password','$name','$number')";

      mysqli_query($con, $query);

      header("location: user.php");
      die;
    }
    else
    {
      echo "Please enter some valid information";
    }
  }

?>