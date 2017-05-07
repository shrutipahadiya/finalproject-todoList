<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>User Exist Error</title> 
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <div class="panel-heading">Message</div>
      <div class="panel-body">
	  <form class="form-signin" >
    <div class="form-group">
      <?php echo "This email id already exists, please enter a new email id!</br> ";?>
    </div>
    
</form>
<form action= "signup.php">

 <input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="continue to sign up" data-toggle="tooltip" title="Sign up"/>
 </form></div>
    </div>
	</div>  

	</body>
 </html>
 