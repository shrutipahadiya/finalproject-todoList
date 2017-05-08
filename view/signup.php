<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Sign-Up</title> 

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script type="text/javascript" href="../js/jquery.min.js"></script> 
	<script type="text/javascript" href="../js/bootstrap.min.js"></script> 



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
<?php include 'header.php'; ?>
<!--<div class="head1">
<h1 align="center">Todo Application</h1>
</div>-->


<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Create a new account</div>
      <div class="panel-body"><form class="form-signin"  method ="post" action="../controller/index.php">
   
	<div class="form-group">
   <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="reg_uname" id="reg_uname" value="" required size="30" maxlength="30" pattern="[a-zA-Z0-9]+" title="alphabets and numbers allowed"/> 
  </div>

   <div class="form-group">
   <label for="password">Password: </label>
   <input type="password" class="form-control"  name="reg_password" id="reg_password" value="" required size="30" maxlength="30" /> 
   </div> 
   
   <div class="form-group">
  <label for="firstname">First Name:</label>
  <input type="text" class="form-control" name="reg_firstname" id="reg_firstname" value="" required size="30" maxlength="30" pattern="[a-zA-Z0-9]+" title="alphabets and numbers allowed"/> 
   </div>
   
      <div class="form-group">
  <label for="lastname">Last Name:</label> 
  <input type="text" class="form-control" name="reg_lastname" id="reg_lastname" value="" required size="30" maxlength="30" pattern="[a-zA-Z0-9]+" title="alphabets and numbers allowed"/> 
  </div>
   
   
   <div class="form-group">
   <label for="email">Email Address :</label> 
   <input type="email" class="form-control" name="reg_email" id="reg_email" value="" required size="30" maxlength="30" /> 
  </div>



   <div class="form-group">
   <label for="phone">Phone Number: </label> 
  <input type="text" name="reg_phonenumber" class="form-control"  id="reg_phonenumber" value="" required size="13" maxlength="30" pattern="[0-9+-]+" title="numbers,+,- allowed"/>
  </div>


 <div class="form-group">
  <label for="birthday">Birthday : </label> 
  <input type="date" name="reg_birthdate" class="form-control" id="reg_birthdate" value="" required/> 
 </div>
  
  
  <div class="form-group">
 <label for="gender">Gender : </label>
 <input type="radio" required name="reg_gender" id="reg_gender" value="Male">Male</input>
 <input type="radio" name="reg_gender" id="reg_gender" value="Female">Female</input> 
 </div>


  <input type="hidden" name="action" value="signup" />
  
    <input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Sign up" data-toggle="tooltip" title="Click here to signup"  />
 </form>


 </div>

  <div class="panel-body">
<form action="../login.php" method = "post">
  <input id="button" class="btn btn-sm btn-primary btn-block"  type='submit' value='Login' data-toggle="tooltip" title="Click here to login"  />
 </form>
</div>

    </div>
	</div> 


	
 

</body>
</html>

