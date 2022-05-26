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
<?php include('navfixed.php');?>
<body>

<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li ><a href="dams.php"><i class="icon-group icon-2x"></i>Manage Dam</a>  </li>
			<li><a href="dams.php"><i class="icon-group icon-2x"></i>Add DAM</a></li>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> DAMs
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">DAMS</li> /
			<li class="active">Edit</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="dams.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<center>
<?php
			
			include('../connect.php');
      $ids = $_GET['id'];
			$showquery = "select * from dam where id={$ids}";
			$showdata = mysqli_query($con,$showquery);
		
			$row = mysqli_fetch_array($showdata);
			{
			
		?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditdams.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i> Edit DAM Details</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>DAM ID : </span><input type="text" style="width:265px; height:30px;" name = "id" value="<?php echo $row['id']; ?>" Readonly/><br>

<span>DAM Name : </span><input type="text" style="width:265px; height:30px;"  name="name" value="<?php echo $row['name']; ?>" /><br>

<span>Type: </span>
<select name="type" style="width:265px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['type']; ?></option>
	
		<option>Large DAM</option>
		<option>Small DAM</option>
	
</select><br>
<span>Date of Build: </span><input type	="date" style="width:265px; height:30px;" name="year" value="<?php echo $row['year']; ?>" /><br>
<span>Capacity Storage </span><input type="text" name="capacity" style="width:265px; height:30px; margin-left:-5px;" name="capacity" value="<?php echo $row['capacity']; ?>" />
	<br>
<span>Place : </span><input type	="text" style="width:265px; height:30px;" name= "place" value="<?php echo $row['place']; ?>" name="place" required /><br>
<span>Built Under : </span><textarea style="width:265px; height:50px;" name="built" ><?php echo $row['built']; ?> </textarea><br><br>

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