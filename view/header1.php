<?php
$fname = $_COOKIE['my_firstname'];
$lname = $_COOKIE['my_lastname'];
if($fname =="" || $lname == ""){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Todo appllication</title> 

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

.logoutbtn {
   
    top: 400px;
    right:10px;
    height: 10px;
    border: 40px;
}
div.head1 {
    position: absolute;
    top: 0px;    
    width: 100%;
    height: 14%;
    background-color:grey;
}
h1   {color: #2e6da4;
font-size:50px;
font-family: "Times New Roman", Georgia, Serif;
  font-style: normal;
}
h2   {color: #2e6da4;
font-size:20px;
font-family: "Times New Roman", Georgia, Serif;
  font-style: normal;
}
.logout{
 top: 100px;
    left:300 px;
    width: 120px;
    height: 50px;
}
</style>
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</head> 

<body>
<div class="head1">

<table style="width:100%;height:100%">
<tr>
<td align="left">
<table style="width:100%;height:100%">
<tr>
<td>
<h1 >Todo List Application</h1>
</td>
</tr>
<tr>
<td>
<h4>Welcome <?php echo $fname." ". $lname; ?></h4>
</td>
</tr>
</table>
</td>
<td align="right">
<div style="border:40px">

<form action="../view/logout.php" method="post"> 
 <input id="button"  type="submit" value="Logout"  class="btn btn-primary logout" title="Logout"/>
 </form>
 </div>
 </td>
 </tr>
 </table>
</div>




 

	</body>



 
 </html>
