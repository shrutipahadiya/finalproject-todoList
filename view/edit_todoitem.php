<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Edit todo item</title> 
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
<?php include('header1.php'); ?>
<body id="body-color">

<!--<div class="head1">
<h1 align="center">Todo Application</h1>
</div>-->


<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Edit todo item</div>
      <div class="panel-body"><form class="form-signin"  method ="post" action="../controller/todo.php">
 
  


<div class="form-group">
   <label for="description">Item Description:</label>
  <input type="text" name="edit_description" class="form-control" id="edit_description" value='<?php echo $_POST['description']?>' required size="30" maxlength="30"/> 
</div>


  
  	<div class="form-group">
   <label for="date">Iten Due Date :</label>
  <input type="date" name="edit_duedate" id="edit_duedate"  class="form-control"value='<?php echo $_POST['createdate']?>' required/> 
  </div>
  
   	<div class="form-group">
   <label for="time">Item Due Time:</label>
   <input type="time" name="edit_duetime"   class="form-control" id="edit_duetime" value='<?php echo $_POST['createtime']?>' required /> 
   </div>
  
   <input type="hidden" name="action" value="edit_item" />
 <input type='hidden' name='item_id' value='<?php echo $_POST['item_id']?>'/>
    <input type="submit" value="Save" id="button" class="btn btn-sm btn-primary btn-block" data-toggle="tooltip" title="Click here to save a todo item"  />
 </form>
 </div>


 


 <div class="panel-body">
 <form method = 'post' action = '../controller/todo.php'>
   <input type="hidden" name="action" value="cancel" />
    <input type="submit" value="Cancel" id="button" class="btn btn-sm btn-primary btn-block" data-toggle="tooltip" title="Click here to cancel"  />
 </form>
</div>

 
    </div>
	</div>  
	  </body>
</html>



  



