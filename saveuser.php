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
    $file = $_FILES['file'];

    if(!empty($username) && !empty($password) && !empty($name) && !empty($number) && !is_numeric($username) && !is_numeric($name))
    {
      $user_id = random_num(20);
      $filename = $file['name'];
      $filepath = $file['tmp_name'];
      $fileerror = $file['error'];
      
      if($fileerror ==0){
        $destfile = 'uploads/'.$filename;

        move_uploaded_file($filepath, $destfile);

      $query = "insert into user(user_id, username,password,name,number,file) values('$user_id', '$username','$password','$name','$number','$destfile')";

      mysqli_query($con, $query);
      if($query){
        header("location: index.php");
        //echo " Inserted";
      }else
      {
        echo "Image Not insertedd";
      }
      }

     
    }
    else
    {
      echo "Please enter some valid information";
    }
  }
?>