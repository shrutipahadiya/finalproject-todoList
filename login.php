<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Login</title> 

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/jquery.min.js"></script> 
	<script type="text/javascript" href="js/bootstrap.min.js"></script> 




  <style>
  div.s1 {
    position: absolute;
    top: 150px;
    left: 500px;
    width: 200px;
    height: 10px;
    border: none;
}
div.head1 {
    position: absolute;
    top: 0px;
    
    width: 100%;
    height: 13%;
    background-color:grey;
}
h1   {color: #2e6da4;
font-size:50px;

}
</style>
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</head> 

<body id="body-color">
<?php include 'view/header.php'; ?>
<!--<div class="head1">
<h1 align="center">Todo Application</h1>
</div>-->

<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Login</div>
      <div class="panel-body">
	  <form class="form-signin"  method ="post" action="controller/index.php">
    <div class="form-group">
      <label for="usr">Email:</label>
	  
      <input type="email" class="form-control" id="reg_uname"  name="reg_uname" required size="30" maxlength="30" placeholder="Email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
	   
      <input type="password" class="form-control" id="reg_password" name="reg_password" required size="30" maxlength="30" placeholder="Password" >
    </div>
  <input type="hidden" name="action" value="test_user"/><br>
<input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Login"  data-toggle="tooltip" title="Click here to login"  />
</form>

 </div>

  <div class="panel-body">
<form action= "view/signup.php">
 <input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Signup" data-toggle="tooltip" title="Click here to signup"/>
 </form></div>
    </div>
	</div>  
	</body>
 </html>
  

 