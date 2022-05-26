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
			<li><a href="state.php"><i class="icon-group icon-2x"></i> States</a>  </li>
			<li><a href="dams.php"><i class="icon-user icon-2x"></i> DAMs</a>     </li>
			<li class="active"><a href="control.php"><i class="icon-user icon-2x"></i>Water Control</a>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Add Water Controls
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">WaterControls</li> /
			<li class="active">Add Control</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="control.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<form action="savecontrol.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i> Add New Water Control	</h4></center>
<hr><center>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span>Type: </span>
<select name="type" style="width:265px; height:30px; margin-left:-5px;" >
	<option> </option>
	<option>Large</option>
	<option>Small</option>
</select><br>
<input type="hidden" name="id" style="width:265px; height:30px;" required><br>

<span>DAM Name : </span><input type="text" name="name" style="width:265px; height:30px;" required><br>
					

<span>Ratio_Inflow : </span><input type="text" style="width:265px; height:30px;"  name="inflow" Required /><br>
<span>Ratio_Outflow: </span><input type="text" style="width:265px; height:30px;" name="outflow" required /><br>
<span>Reserved</span><input type="text" style="width:265px; height:30px;" name="reserved" required /><br>

<span>Electricity</span><input type="text" style="width:265px; height:30px;" name="electricity" required /><br>
<span>Description: </span><input type="text" style="width:265px; height:30px;" name="description" required /><br>
<div >
	
					
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Control</button>

</div>
</div>
</form>
</center>

<script src="js/jquery.js"></script>
  
</body>


</html>