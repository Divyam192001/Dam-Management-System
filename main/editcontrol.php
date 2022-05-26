<?php
	session_start();
	?>
<html>
<head>
<title>
Model :: DAM MANAGEMENT System
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
<?php include('navfixed1.php');?>
<body>

<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="user.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li ><a href="userstate.php"><i class="icon-group icon-2x"></i>States</a>  </li>
			<li><a href="userdam.php"><i class="icon-group icon-2x"></i> DAM</a>     </li>
			<li><a href="usercontrol.php"><i class="icon-group icon-2x"></i>Water Control</a>     </li>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Water Controls
			</div>
			<ul class="breadcrumb">
			<li><a href="main/user.php">Dashboard</a></li> /
			<li class="active">Controls</li> /
			<li class="active">Edit Controls</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="usercontrol.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<center>

<?php  
		include('../connect.php');
      $ids = $_GET['id'];
			$showquery = "select * from control where id=$ids";
			$showdata = mysqli_query($con,$showquery);
		
			$row = mysqli_fetch_array($showdata);
			{
			
		?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditcontrol.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i>  Controls</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>DAM ID : </span><input type="text" style="width:265px; height:30px;"  name="id" value="<?php echo $row['id']; ?>" Readonly  /><br>
<span>DAM Name : </span><input type="text" style="width:265px; height:30px;"  name="name" value="<?php echo $row['name']; ?>" Readonly  /><br>
<span>Ratio_Inflow : </span><input type="text" style="width:265px; height:30px;"  name="inflow" value="<?php echo $row['inflow']; ?>" Required /><br>
<span>Ratio_Outflow: </span><input type="text" style="width:265px; height:30px;"  name="outflow" value="<?php echo $row['outflow']; ?>" Required /><br>
<span>Reserved : </span><input type="text" style="width:265px; height:30px;"  name="reserved" value="<?php echo $row['reserved']; ?>" Required /><br>
<span>Electricity : </span><input type="text" style="width:265px; height:30px;"  name="electricity" value="<?php echo $row['electricity']; ?>" Required /><br>
<span>Description : </span><input type="text" style="width:265px; height:30px;"  name="description" value="<?php echo $row['description']; ?>" Required /><br>
	


<div >

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>
</center>

<script src="js/jquery.js"></script>

</body>


</html>