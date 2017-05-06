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

<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Edit todo item</div>
      <div class="panel-body"><form class="form-signin"  method ="post" action="todo.php">
 
  


<div class="form-group">
   <label for="description">Item Description:</label>
  <input type="text" name="add_description" id="add_description" value='<?php echo $_POST['description']?>' required/> 
</div>


  
  	<div class="form-group">
   <label for="date">Iten Due Date :</label>
  <input type="date" name="add_duedate" id="add_duedate" value=<?php echo $_POST['createdate']?> required/> 
  </div>
  
   	<div class="form-group">
   <label for="time">Item Due Time:</label>
   <input type="time" name="add_duetime"   id="add_duetime" value='<?php echo $_POST['createtime']?>' required /> 
   </div>
  
   <input type="hidden" name="action" value="edit_item" /></br></br>
 <input type='hidden' name='item_id' value='<?php echo $_POST['item_id']?>'/>
    <input type="submit" value="Save" id="button" class="btn btn-sm btn-primary btn-block" data-toggle="tooltip" title="Save item"  />
 </form>

<form method = 'post' action = 'todo.php'>
   <input type="hidden" name="action" value="cancel" /></br></br>
    <input type="submit" value="Cancel" id="button" class="btn btn-sm btn-primary btn-block" data-toggle="tooltip" title="Cancel"  />
 </form>


 </div>
    </div>
	</div>  
	  </body>
</html>



  



