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
			<li><a href="state.php"><i class="icon-group icon-2x"></i>Manage Control</a>  </li>
			<li><a href="dams.php"><i class="icon-group icon-2x"></i>Add Control</a>     </li>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Water Control
			</div>
			<ul class="breadcrumb">
			<li><a href="user.php">Dashboard</a></li> /
			<li class="active">Control</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="control.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

<?php
			
			include('../connect.php');
			//$ids = $_GET['id'];
			$selectquery = "select * from control ";
			$query = mysqli_query($con,$selectquery);
			$nums = mysqli_num_rows($query);
			($row = mysqli_fetch_array($query));
			//while($row = mysqli_fetch_array($query))
			{
			
		?>
		
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<center><h4><i class="icon-edit icon-large"></i> DAM Control Information</h4></center>
<hr>
<center>
	
<br><br>

<table>

<tr>

<td> DAM Name :  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['name']; ?></td>
</tr>
<tr>
<td> Ratio_Inflow :  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['inflow']; ?></td>
</tr>
<tr>
<td> Ratio_Outow:  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['outflow']; ?></td>
</tr>
<tr>
<td> Reserved :  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['reserved']; ?></td>
</tr>
<tr>
<td> Electricity:  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['electricity']; ?></td>
</tr>
<tr>
<td> Description :  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['description']; ?></td>
</tr>


</table>
<br>
			
</center>

</div>
<?php
}
?>

<script src="js/jquery.js"></script>
 
</body>
<?php include('footer.php');?>

</html>