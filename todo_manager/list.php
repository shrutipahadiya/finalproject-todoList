<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Todo List</title> 
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





<?php
echo "<h1> To do list system </h1></br>";
echo "Welcome, ".$_COOKIE['my_firstname']." ". $_COOKIE['my_lastname'].        '</br>';
echo "Below you may find your to-do items: ";
echo "</br></br>";
?>

<html>
 
<body id="body-color">
<?php include '../view/header.php'; ?>

 
<!--Starts incomplete to do list -->
   <table>
  <h1>Incompleted todo items<h1>
    <tr>
<td>Item Description</td>
<td>Item Creation Date</td>
<td>Item Creation Time</td>
	</tr>
	
	<tr>
       <?php foreach($resultincomplete as $res):?>
        <tr>
	
	<td><a href='detail.php'><?php echo $res['todo_item']; ?></a> </td>  
	<td><a href='detail.php'><?php echo $res['createdate']; ?></a> </td>  
   <td><a href='detail.php'><?php echo $res['createtime']; ?></a> </td>  
   <td>
<form action='todo_manager/edit_todoitem.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='description' value='<?php echo $res['todo_item'] ?>'/>
<input type='hidden' name='createdate' value='<?php echo $res['createdate'] ?>'/>
<input type='hidden' name='createtime' value='<?php echo $res['createtime'] ?>'/>

<input type='hidden' name='action' value='edit_incomplete'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Edit'  data-toggle="tooltip" title="Click here to edit a todo item"/>
</form>
</td>
<td>
<form action='todo_manager/todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete_incomplete'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Delete'  data-toggle="tooltip" title="Click here to delete a todo item"/>
</form>
</td>

<td>
<form action='todo_manager/todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='mark_complete'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block" value='Mark As Complete'/>
</form>
   </td>



   </tr>
       <?php endforeach;?>
     </tr>
   </table>
   
<!--Ends incomplete to do list -->

<!--Starts complete to do list -->
  <table>
 <h1>Completed todo items<h1>
    <tr>
<td>Item Description</td>
<td>Item Creation Date</td>
<td>Item Creation Time</td>
	</tr>
<tr>
<?php foreach($resultcomplete as $res):?>
        <tr>
	
 <td><a href='detail.php'><?php echo $res['todo_item']; ?></a> </td>  
	<td><a href='detail.php'><?php echo $res['createdate']; ?></a> </td>  
   <td><a href='detail.php'><?php echo $res['createtime']; ?></a> </td>  


    <td>
<form action='todo_manager/edit_todoitem.php'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='edit_complete'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Edit'  data-toggle="tooltip" title="Click here to edit a todo item"/>
</form>
   </td>

 <td>
<form action='todo_manager/todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete_complete'/>
<input id="button" class="btn btn-sm btn-primary btn-block"  type='submit' value='Delete'   data-toggle="tooltip" title="Click here to delete a todo item"/>
</form>
   </td>

 
   </tr>
       <?php endforeach;?>
     </tr>
   </table>

<!--Ends complete to do list -->

<form action='todo_manager/add_todoitem.php'>
Click add todo item button to add a new todo item.<input id="button" class="btn btn-sm btn-primary btn-block"  type="submit" value="Add Todo Item"   data-toggle="tooltip" title="Click here to add a new todo item"/>
</form>




   <!--<form method='post' action='index.php'>
      <strong>Description: </strong><input type='text' name='description' /> </br>
      <input type='hidden' name= 'action' value='add'/></br>
      <input type="submit" value="Add"/></br>
   </form>-->



 </body>
</html>
