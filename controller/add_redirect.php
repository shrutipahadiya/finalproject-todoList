<?php

//echo "action in redirect ------";
//echo $action;
require('../model/db_connect.php');
require('../model/todo_db.php');
$action = filter_input(INPUT_POST, "action");
if($action == 'add_item') {

 $add_description = filter_input(INPUT_POST, 'add_description');
  $add_date = filter_input(INPUT_POST, 'add_duedate');
  $add_time = filter_input(INPUT_POST, 'add_duetime');
$add_id = $_COOKIE['my_id'];

if(isset($add_description) and  $add_description!='' and isset($add_date) and  $add_date!='' and isset( $add_time) and  $add_time!=''  ){
   addTodoItem($add_id,$add_description,$add_date,$add_time);
  }
   }
?>

<head>
<link rel="stylesheet" href="../css/style.css">
</head>
<html>
<body>
<form id="listform" action="../controller/todo.php" method="post">
    
<input type="hidden" name="action" value="redirect_additem">
</form>
</body>
</html>
<script type="text/javascript">
    document.getElementById('listform').submit();
</script>





