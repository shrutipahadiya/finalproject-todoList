<?php

$action = filter_input(INPUT_POST, "action");
echo "action in redirect ------";

$action = filter_input(INPUT_POST, "action");
echo $action;
require('../model/db_connect.php');
require('../model/todo_db.php');
if($action == 'add_item') {
if(isset($_POST['add_description']) and $_POST['add_description']!='' and isset($_POST['add_duedate']) and $_POST['add_duedate']!='' and isset($_POST['add_duetime']) and $_POST['add_duetime']!=''  ){
   addTodoItem($_COOKIE['my_id'],$_POST['add_description'],$_POST['add_duedate'],$_POST['add_duetime']);
  }
 // $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
//$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
//include('list.php');
   }
?>

<html>
<body>
<form id="listform" action="todo.php" method="post">
    
<input type="hidden" name="action" value="redirect_additem">
</form>
</body>
</html>
<script type="text/javascript">
    document.getElementById('listform').submit();
</script>





