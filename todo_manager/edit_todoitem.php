<html>
<head>
  <title>Edit todo item page</title>

<body>
 <h1> Edit todo item</h1>
 <form method = 'post' action = 'todo.php'>
  
  <strong> Item Description: </strong><input type="text" name="edit_description" value="" required/> </br></br>
  <strong> Iten Due Date :</strong><input type="date" name="edit_duedate" value="" required/> </br></br>
   <strong> Item Due Time : </strong><input type="time" name="edit_duetime" value="" required /> </br> </br>
  
   <input type="hidden" name="action" value="edit_item" /></br></br>
  <!--<input type="hidden" name="action" value="registrar" /></br></br>-->
 <!-- <input type="submit" value="Register" />-->
    <input type="submit" value="Save" />
<input type='hidden' name='item_id' value='<?php echo $_POST['item_id']?>'/>

 </form>


<form method = 'post' action = 'todo.php'>
  
 
   <input type="hidden" name="action" value="cancel_edit" /></br></br>
  <!--<input type="hidden" name="action" value="registrar" /></br></br>-->
 <!-- <input type="submit" value="Register" />-->
    <input type="submit" value="Cancel" />
 </form>


 <!--<form action="login.php" method = "post">
  <input type='submit' value='Login'/>
 </form>-->
</body>
</html>
