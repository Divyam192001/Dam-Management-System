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

<?php include('navfixed.php');?>
<body>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="state.php"><i class="icon-group icon-2x"></i>Manage Control</a>  </li>
			<li><a href="addcontrol.php"><i class="icon-group icon-2x"></i>Add Control</a>     </li>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Water Control
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">WaterControl</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			
<?php
			include('../connect.php');
			 $sql = " SELECT count(id) as total FROM control ";
			 $result = mysqli_query($con,$sql);
			 $values = mysqli_fetch_assoc($result);
			 $rowcount=$values['total'];
		?>
		
				<div style="text-align:center;">
			Total Number of DAMs:  <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount;?></font>
			</div>
			
			
</div>


<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search DAMs..." autocomplete="off" />
<a href="addcontrol.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Controls</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
		<th width="10%"> ID </th>
			<th width="20%"> DAM Name </th>
			<th width="5%"> Ratio_inflow </th>
		    <th width="5%"> Ratio_Outflow </th>
			<th width="10%"> Reserved </th>
			<th width="10%"> Electricity_Generated </th>
			<th width="20%"> Description </th>
			
			
			<th width="15%"> Action </th>
		</tr>
	</thead>
	<body>
		
  <?php
			
			include('../connect.php');
			//$ids = $_GET['id'];
			$selectquery = "select * from control ";
			$query = mysqli_query($con,$selectquery);
			$nums = mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query))
			{
			
		?>
		
		<td> <?php echo $row['id']; ?></td>
			<td> <?php echo $row['name']; ?></td>
			<td> <?php echo $row['inflow']; ?></td>
			<td> <?php echo $row['outflow']; ?></td>
			<td> <?php echo $row['reserved']; ?></td>
			<td> <?php echo $row['electricity']; ?></td>
			<td> <?php echo $row['description']; ?></td>
			
			<td>

			<a  href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a></td>
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
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Control? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletecontrol.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>


</html>