<?php
echo "<h1> To do list system </h1></br>";
echo "Welcome, ".$_COOKIE['my_firstname']." ". $_COOKIE['my_lastname'].        '</br>';
echo "Below you may find your to-do items: ";
echo "</br></br>";
?>

<html>
 
 <body>
 
<!--Starts incomplete to do list -->
   <table>
  <h1>Incompleted todo items<h1>
    <tr>
<td>Item Description</td>
<td>Item Creation Date</td>
<td>Item Creation Time</td>
	</tr>
	
	<tr>
       <?php foreach($result as $res):?>
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
<input type='submit' value='Edit'/>
</form>
</td>
<td>
<form action='todo_manager/todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete_incomplete'/>
<input type='submit' value='Delete'/>
</form>
</td>

<td>
<form action='todo_manager/todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='mark_complete'/>
<input type='submit' value='Mark As Complete'/>
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
<?php foreach($result as $res):?>
        <tr>
	
 <td><a href='detail.php'><?php echo $res['todo_item']; ?></a> </td>  
	<td><a href='detail.php'><?php echo $res['createdate']; ?></a> </td>  
   <td><a href='detail.php'><?php echo $res['createtime']; ?></a> </td>  


    <td>
<form action='todo_manager/edit_todoitem.php'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='edit_complete'/>
<input type='submit' value='Edit'/>
</form>
   </td>

 <td>
<form action='todo_manager/todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete_complete'/>
<input type='submit' value='Delete'/>
</form>
   </td>

 
   </tr>
       <?php endforeach;?>
     </tr>
   </table>

<!--Ends complete to do list -->

<form action='todo_manager/add_todoitem.php'>
Click add todo item button to add a new todo item.<input type="submit" value="Add Todo Item"/>
</form>




   <!--<form method='post' action='index.php'>
      <strong>Description: </strong><input type='text' name='description' /> </br>
      <input type='hidden' name= 'action' value='add'/></br>
      <input type="submit" value="Add"/></br>
   </form>-->



 </body>
</html>
