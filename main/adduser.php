<?php
	session_start();
	?>
<html>
<head>
<title>
Model :: DAM MANAGEMENT SYSTEM
</title>

 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
</SCRIPT>	
<?php include('navfixed.php');?>
<body>

<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li><a href="userview.php"><i class="icon-group icon-2x"></i>Manage Users</a>  </li>
			<li class="active"><a href="#"><i class="icon-user icon-2x"></i>Add user</a>     </li>

			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Add Users
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Users</li> /
			<li class="active">Add User</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="userview.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<form action="saveuser.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i> Add New User	</h4></center>
<hr><center>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span>Name : </span><input type="text" style="width:265px; height:30px;"  name="name" placeholder="User Name min 6" minlength="6" Required /><br>

<span>PhoneNumber:</span><input type="text" style="width:265px; height:30px;"  name="number" placeholder="Mobile Number" minlength="10" maxlength="10" Required /><br>
<span>Username : </span><input type	="text" style="width:265px; height:30px;" name="username" placeholder="Username min 4" minlength="4" maxlength="12" required /><br>
<span>Password : </span><input type	="password" style="width:265px; height:30px;" name="password" placeholder="User Password min 4" minlength="4" maxlength="12" required /><br>
<span>Profile Pic:</span><input type="file" name="file" id="file"  ><br><br>

<div >


<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save User</button>
</div>
</div>
</form>
</center>

<script src="js/jquery.js"></script>

</body>


</html>