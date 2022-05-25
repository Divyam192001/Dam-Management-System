
<!DOCTYPE html>
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
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>

 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	
</head>
<body style=" background:url(img/1.gif); background-size:cover;">

<?php include('navfixed.php');?>
<!--<a href="../index.php">Logout</a>-->

	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <!--<li class="active"><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> -->
			<li><a href="admin.php"><i class="icon-group icon-2x"></i> Admin</a></li>
			<li><a href="userview.php"><i class="icon-group icon-2x"></i> Users</a></li>
			<li><a href="state.php"><i class="icon-group icon-2x"></i> States</a></li>
			<li><a href="dams.php"><i class="icon-group icon-2x"></i>DAMS</a></li>
			<li><a href="control.php"><i class="icon-group icon-2x"></i>Water Control</a></li>


			<br><br>	
			
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 44px 'Aleo'; color:#722290;"><center> SAVE WATER!!!!!!</center></font>
<div id="mainmain">


                   
<a href="state.php"><i class="icon-group icon-2x"></i><br> States</a>     
<a href="userview.php"><i class="icon-group icon-2x"></i><br> Users</a>  
<a href="dams.php"><i class="icon-group icon-2x"></i><br> DAMs</a> 
<a href="control.php"><i class="icon-group icon-2x"></i><br> Water Control</a>    
<!--<a href="../index.php"><font color="red"><i class="icon-off icon-2x"></i></font><br> Logout</a> -->

<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
</html>
