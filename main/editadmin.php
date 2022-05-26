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
			<li ><a href="admin.php"><i class="icon-group icon-2x"></i>Manage Admin</a>  </li>
			<li><a href="addadmin.php"><i class="icon-user icon-2x"></i>Add Admin</a>     </li>

			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> ADMIN
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Admin</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="admin.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<center>
<?php
			
			include('../connect.php');
      $ids = $_GET['id'];
			$showquery = "select * from admin where id={$ids}";
			$showdata = mysqli_query($con,$showquery);
		
			$row = mysqli_fetch_array($showdata);
			{
			
		?>

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditadmin.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i>  Admin</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Admin ID : </span><input type="text" style="width:265px; height:30px;"  name="id" value="<?php echo $row['id']; ?>"  Readonly /><br>
<span>Admin Name : </span><input type="text" style="width:265px; height:30px;"  name="name" value="<?php echo $row['name']; ?>" Required /><br>
<span>Admin Email : </span><input type="text" style="width:265px; height:30px;"  name="email" value="<?php echo $row['email']; ?>" Required /><br>
<span>Username : </span><input type="text" style="width:265px; height:30px;"  name="username" value="<?php echo $row['username']; ?>" Required /><br>
<span>Password : </span><input type="text" style="width:265px; height:30px;"  name="password" value="<?php echo $row['password']; ?>" Required /><br>
	

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
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Admin? There is NO undo!"))
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


</html>