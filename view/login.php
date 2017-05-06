<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Sign-Up</title> 
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  div.s1 {
    position: absolute;
    top: 100px;
    left: 150px;
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
h1   {color: blue;
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
<div class="head1">
<h1>Todo Application</h1>
</div>

<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Login</div>
      <div class="panel-body"><form class="form-signin"  method ="post" action="../index.php">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="reg_uname"  name="reg_uname">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="reg_password" name="reg_password">
    </div>
  <input type="hidden" name="action" value="test_user"/><br>
<input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Login"  data-toggle="tooltip" title="Login"  />
<form action= "signup.php">
 <input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Signup" data-toggle="tooltip" title="New User? Please sign up to create an account"/>
 </form></div>
    </div>
	</div>  
	  
<!--

</div>
</div>
    </div>
	-->


<!--

<tr><td class="form-signin-heading"><legend>Signup Form</td></tr>
<center>
<table border="0" style="align:center" > 
<tr> 





</form>
</tr>
</table>
</center>

<!--
<div class="form-group">
<form class="form-signin"  method ="post" action="../index.php">
<td  class="sr-only">Email or Username : </td><td><input class="form-control" type="text" name="reg_uname" value="" required size="30" maxlength="30"/></td><br><br>
</tr>
</div>
<div class="form-group">
<tr>
<td  class="sr-only">Password:</td><td><input class="form-control" type="password" name="reg_password" value="" required size="30" maxlength="30"/></td><br><br>
</tr>
<div class="form-group">

.

</table>
<table>
<form action= "signup.php">
<tr><td>New User? Please sign up to create an account <input id="button" class="btn btn-lg btn-primary btn-block" type="submit" value="Signup"/></td></tr>
 </form> 
 </table>
 
 </div> 
 -->
 </body>
 </html>
