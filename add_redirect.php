<head>
<link rel="stylesheet" href="style.css">
</head>
<?php

$action = filter_input(INPUT_POST, "action");
//echo "action in redirect ------";

$action = filter_input(INPUT_POST, "action");
//echo $action;
require('db_connect.php');
require('todo_db.php');
if($action == 'add_item') {

 $add_description = filter_input(INPUT_POST, 'add_description');
  $add_date = filter_input(INPUT_POST, 'add_duedate');
  $add_time = filter_input(INPUT_POST, 'add_duetime');
$add_id = $_COOKIE['my_id'];


if(isset($add_description) and  $add_description!='' and isset($add_date) and  $add_date!='' and isset( $add_time) and  $add_time!=''  ){
   addTodoItem($add_id,$add_description,$add_date,$add_id);
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





