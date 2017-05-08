<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Login Error</title> 

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
<?php include('../view/header.php'); ?>
<!--<div class="head1">
<h1 align="center">Todo Application</h1>
</div>-->
<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Message</div>
      <div class="panel-body">
	  <form class="form-signin" >
    <div class="form-group">
      <?php echo "Wrong Username and Password.Please try again!</br> ";?>
    </div>
    
</form>
<form action= "../login.php">

 <input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Click here to login" data-toggle="tooltip" title="Login"/>
 </form></div>
    </div>
	</div>  

	</body>
 </html>
 


