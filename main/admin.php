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
			<li class="active"><a href="#"><i class="icon-group icon-2x"></i> Manage Admin</a>  </li>
			<li><a href="addadmin.php"><i class="icon-group icon-2x"></i> Add Admin</a>     </li>
           
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Admin
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Admin</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			
			<?php
			include('../connect.php');
			 $sql = " SELECT count(id) as total FROM admin ";
			 $result = mysqli_query($con,$sql);
			 $values = mysqli_fetch_assoc($result);
			 $rowcount=$values['total'];
		?>
				<div style="text-align:center;">
			Total Number of Admin:  <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount;?></font>
			</div>
			
			
</div>

<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Admin..." autocomplete="off" />
<a href="addadmin.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Admin</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="15%"> Admin ID</th>
			<th width="20%"> Admin Name </th>
			<th width="20%"> Admin Email </th>
			<th width="20%"> Username </th>
			<th width="20%"> Password </th>
			
			
			<th width="15%"> Action </th>
		</tr>
	</thead>
	<tbody>
		
			
  <?php
			
			include('../connect.php');
			$selectquery = "select * from admin";
			$query = mysqli_query($con,$selectquery);
			$nums = mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query))
			{
			
		?>
			
		
<td><?php echo $row['id']; ?></td>
			<td> <?php echo $row['name']; ?></td>
			<td> <?php echo $row['email']; ?></td>
			<td> <?php echo $row['username']; ?></td>
			<td> <?php echo $row['password']; ?></td>
			
			<td>
			<a  title="Click to edit the admin" href="editadmin.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button> </a>
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
 if(confirm("Sure you want to delete this admin? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteadmin.php",
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
<?php include('footer.php');?>

</html>