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
			<li><a href="dams.php"><i class="icon-group icon-2x"></i>Manage Dams</a>  </li>
			<li class="active"><a href="dams.php"><i class="icon-group icon-2x"></i>Add DAM</a>     </li>
			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Add DAM
			</div>
			<ul class="breadcrumb">
			<li><a href="viewdams.php">Dashboard</a></li> /
			<li class="active">DAMS</li> /
			<li class="active">Add DAM</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="dams.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<form action="savedams.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i> Add New DAMS	</h4></center>
<hr><center>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<input type="hidden" style="width:265px; height:30px;"  name="id" Required /><br>

<span>DAM Name : </span><input type="text" style="width:265px; height:30px;"  name="name" Required /><br>
<span>Type: </span>
<select name="type" style="width:265px; height:30px; margin-left:-5px;" >
	<option>Large</option>
	<option>Small</option>
</select><br>
<span>Date of Build: </span><input type	="date" style="width:265px; height:30px;" name="year" required /><br>
<span>Capacity Storage  </span><input type ="text" name="capacity" style="width:265px; height:30px; margin-left:-5px;" required />
	<br>
<span>Place: </span><input type	="text" style="width:265px; height:30px;" name="place" required />
<br>
<span>Build Under : </span><textarea style="width:265px; height:50px;" name="built" ></textarea><br>
<span>Image:</span><input type="file" name="file" id="file"  ><br><br>
<div >


<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save DAM</button>
</div>
</div>
</form>
</center>

<script src="js/jquery.js"></script>
 
</body>


</html>