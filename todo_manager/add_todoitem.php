<html>
<head>
  <title>Add to do item page</title>

<body>
 <h1> Create a new todo item</h1>
 <form method = 'post' action = 'todo.php'>
  
  <strong> Item Description: </strong><input type="text" name="add_description" value="" required/> </br></br>
  <strong> Iten Due Date </strong><input type="date" name="add_duedate" value="" required/> </br></br>
   <strong> Item Due Time  </strong><input type="time" name="add_duetime" value="" required /> </br> </br>
  
   <input type="hidden" name="action" value="add_item" /></br></br>
  <!--<input type="hidden" name="action" value="registrar" /></br></br>-->
 <!-- <input type="submit" value="Register" />-->
    <input type="submit" value="Add Item" />
 </form>
 <!--<form action="login.php" method = "post">
  <input type='submit' value='Login'/>
 </form>-->
</body>
</html>
