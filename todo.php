<head>
<link rel="stylesheet" href="style.css">
</head>
<?php
require('db_connect.php');
require('todo_db.php');
require('header1.php');

$action = filter_input(INPUT_POST, "action");
//echo $action;

$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
 $action = "show_login_page";
}

if($action == "show_login_page")
{
 include('login.php');
}else if ($action == 'delete_incomplete'){
if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
	deleteIncompleteTodoItem($_COOKIE['my_id'],$selected);
	}
  $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if ($action == 'delete_item'){
	//echo "delete_item controller----";
if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
//	echo $selected;
	//echo $_COOKIE['my_id'];
  deleteTodoItem($_COOKIE['my_id'],$selected);
	}
$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
	include('list.php');
}else if ($action == 'mark_complete'){
if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
  markCompleteTodoItem($_COOKIE['my_id'],$selected);
	}
	$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
	 include('list.php');
}else if ($action == 'cancel'){
$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
	include('list.php');
}else if ($action == 'edit_item'){
 
  $selected = $_POST['item_id'];
  $value = $_COOKIE['my_id'];
  $description = filter_input(INPUT_POST, 'edit_description');
  $date = filter_input(INPUT_POST, 'edit_duedate');
  $time = filter_input(INPUT_POST, 'edit_duetime');

if(isset($description) and  $description!='' and isset($date) and  $date!='' and isset( $time) and  $time!=''  ){
   updateTodoItem($value,$selected,$description,$date,$time);

  }

 $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
 $resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if($action == 'redirect_additem'){


   $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
include('list.php');  

}else if($action =="show_add_item"){
	
	 include('add_todoitem.php');

	
}

?>
