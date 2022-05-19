<html>
<head>
<title>
Model :: DAM MANAGEMENT SYSTEM
</title>
    <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
      body {
		background-color = #D6ACE6;
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

  <script type="text/javascript">	
	$(document).ready(function() {
 
  $('#first_form').submit(function(e) {
    e.preventDefault();
    var name = $('name').val();
    var number = $('number').val();
    var email = $('email').val();
    var password = $('password').val();
 
    $(".error").remove();
 
    if (name.length < 6) {
      $('name').after('<span class="error">This field is required</span>');
    }
    if (number.length < 10) {
      $('number').after('<span class="error">This field is required</span>');
    }
    if (email.length < 1) {
      $('email').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('email').after('<span class="error">Enter a valid email</span>');
      }
    }
    if (password.length < 8) {
      $('password').after('<span class="error">Password must be at least 8 characters long</span>');
    }
  });
 
});
s
</script>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body style=" background:url(img/6.gif); background-size:cover;">
    
      <div>
		
		
	



<form id="first_form" action="saveuser.php" method="post" enctype="multipart/form-data">
<center><font style=" font:bold 22px 'Aleo'; color:#fff;"><i class="icon-edit icon-large"></i> Add New User	</font></center>
<hr><center>
<div id="ac">
<div class="input-prepend"><font color="#fff">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span>Name : </span><input type="text" style="width:265px; height:30px;" placeholder="User Name min 6" name="name" id="name" minlength="6" Required /><br><br>
<span>Mobile Number : </span><input type="text" style="width:265px; height:30px;" placeholder="Mobile Number" name="number" id="number" 
minlength="10" maxlength="10" Required /><br><br>
<span>Username : </span><input type	="text" style="width:265px; height:30px;" placeholder="Username min 4" name="username" minlength="4" maxlength="12" required /><br><br>
<span>Password : </span><input type	="password" style="width:265px; height:30px;" placeholder="User Password min 4" name="password" id="password" required minlength="4" maxlength="12" /><br><br>

</div>
</div>
<div></font>
<button class="btn btn-large btn-primary " style="width:267px;"><i class="icon-signin icon-large"></i> Save User</button>

</div>
</form>
</center>
</div>


</div>
</body>
</html>