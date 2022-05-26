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
			<li><a href="userstate.php"><i class="icon-group icon-2x"></i>States</a>  </li>
			<li class="active"><a href="#"><i class="icon-group icon-2x"></i> DAMS</a>     </li>
			<li><a href="usercontrol.php"><i class="icon-group icon-2x"></i> Water Control</a>     </li>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> DAMS
			</div>
			<ul class="breadcrumb">
			<li><a href="user.php">Dashboard</a></li> /
			<li class="active">DAMS</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="user.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			
<?php
			include('../connect.php');
			 $sql = " SELECT count(id) as total FROM dam ";
			 $result = mysqli_query($con,$sql);
			 $values = mysqli_fetch_assoc($result);
			 $rowcount=$values['total'];
		?>
		
				<div style="text-align:center;">
			Total Number of DAMS:  <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount;?></font>
			</div>
		
			
</div>


<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search DAMS..." autocomplete="off" />

<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			
			
			<th width="20%"> DAM Name </th>
			<th width="10%"> Type </th>
			<th width="10%"> Build Year </th>
			<th width="10%"> Place </th>
			<th width="15%"> Action </th>
		</tr>
	</thead>
	<tbody>
		
	<?php
			
			include('../connect.php');
			$selectquery = "select * from dam";
			$query = mysqli_query($con,$selectquery);
			$nums = mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query))
			{
			
		?>
		

			<td> <?php echo $row['name']; ?></td>
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['year']; ?></td>
			<td><?php echo $row['place']; ?></td>
			<td><a title="Click to view the DAM" href="userdamview.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button> </a>
			
			
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