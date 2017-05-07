<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Todo appllication</title> 

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
    height: 50%;
    background-color:grey;
}
h1   {color: #2e6da4;
font-size:50px;

}
h2   {color: #2e6da4;
font-size:20px;

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
<h1 >Todo Application</h1>
</td>
<td align="right">
<div style="border:40px">
<form action="logout.php" method="post"> 
 <input id="button"  type="submit" value="Logout"  class="btn btn-primary logout" title="Logout"/>
 </form>
 </div>
 </td>
 </tr>
 </table>
</div>




 

	</body>



 
 </html>
