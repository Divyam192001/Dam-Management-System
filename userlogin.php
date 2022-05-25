<?php
	session_start();
  include("connect.php");
  include("functions.php");
  if(isset($_POST['submit'])){
  if($_SERVER['REQUEST_METHOD']== "POST")
  
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if(!empty($username) && !empty($password) && !is_numeric($username) )
    {
      
      $query = "select * from user where username = '$username' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data["password"] === $password)
            {
              $_SESSION['username']= $user_data['name'];
              print_r($_SESSION);
              header("location: main/user.php");
              die;
            }
        }
      }

      echo "Please enter some valid information";
    }
    else
    {
      echo "Please enter some valid information";
    }
  }
  }
?>