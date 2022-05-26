<?php
	session_start();
	?>
<html>
<head>
<title>
Model :: DAM MANAGEMANT System
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
			<li class="active"><a href="userstate.php"><i class="icon-group icon-2x"></i>States</a>  </li>
			<li><a href="userdam.php"><i class="icon-group icon-2x"></i> DAMS</a>     </li>
			<li><a href="usercontrol.php"><i class="icon-group icon-2x"></i> Water Control</a> 
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> STATES
			</div>
			<ul class="breadcrumb">
			<li><a href="user.php">Dashboard</a></li> /
			<li class="active">States</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="user.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			
<?php
			include('../connect.php');
			 $sql = " SELECT count(id) as total FROM state ";
			 $result = mysqli_query($con,$sql);
			 $values = mysqli_fetch_assoc($result);
			 $rowcount=$values['total'];
		?>
		
				<div style="text-align:center;">
			Total Number of States:  <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount;?></font>
			</div>
		
			
</div>


<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search State..." autocomplete="off" />

<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			
			
			<th width="10%"> State ID </th>
			<th width="20%"> State Name </th>
			<th width="10%"> No Of DAMs </th>
			
			
		</tr>
	</thead>
	<tbody>
		
  <?php
			
			include('../connect.php');
			$selectquery = "select * from state";
			$query = mysqli_query($con,$selectquery);
			$nums = mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query))
			{
			
		?>
		

			<td> <?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['dno']; ?></td>
			
			
			
			</tr>
			<?php
				}
			?>
		
		
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>

</body>
<?php include('footer.php');?>

</html>