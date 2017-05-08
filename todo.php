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
 
 /*if(isset($_POST['item_id']) and isset($_POST['edit_description']) and $_POST['edit_description']!='' and isset($_POST['edit_duedate']) and $_POST['edit_duedate']!='' and isset($_POST['edit_duetime']) and $_POST['edit_duetime']!=''){
*/

  $selected = $_POST['item_id'];
  $value = $_COOKIE['my_id'];

 // echo($selected);
 // echo($value);
  $description = filter_input(INPUT_POST, 'edit_description');
  $date = filter_input(INPUT_POST, 'edit_duedate');
  $time = filter_input(INPUT_POST, 'edit_duetime');





 updateTodoItem($value,$selected,$description,$date,$time);
 // updateTodoItem($_COOKIE['my_id'],$selected,$_POST['edit_description'],$_POST['edit_duedate'],$_POST['edit_duetime']);

  //}
  
 $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
 $resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if($action == 'redirect_additem'){


   $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
include('list.php');  

}else if($action =="show_add_item"){
	
	 include('add_todoitem.php');

	
	
	
}/*else if($action == 'add_item'){
	

  if(isset($_POST['add_description']) and $_POST['add_description']!='' and isset($_POST['add_duedate']) and $_POST['add_duedate']!='' and isset($_POST['add_duetime']) and $_POST['add_duetime']!=''  ){
   addTodoItem($_COOKIE['my_id'],$_POST['add_description'],$_POST['add_duedate'],$_POST['add_duetime']);
  }
$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
include('../view/list.php');
//header("location: ../todo_manager/../view/list.php");
//exit(0);
}*/
?>
