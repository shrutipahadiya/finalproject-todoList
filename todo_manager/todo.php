<?php
require('../model/db_connect.php');
require('../model/todo_db.php');
//require('model/login_db.php');

$action = filter_input(INPUT_POST, "action");
echo $action;

/*if($action == NULL)
{
 $action = "show_login_page";
}
if($action == "show_login_page")
{
 include('../view/login.php');
}
else 
{*/

 if($action == 'add_item'){

  if(isset($_POST['add_description']) and $_POST['add_description']!='' and isset($_POST['add_duedate']) and $_POST['add_duedate']!='' and isset($_POST['add_duetime']) and $_POST['add_duetime']!=''  ){
   addTodoItem($_COOKIE['my_id'],$_POST['add_description'],$_POST['add_duedate'],$_POST['add_duetime']);
  }
$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
include('list.php');
}else if ($action == 'delete_incomplete'){
if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
	deleteIncompleteTodoItem($_COOKIE['my_id'],$selected);
	}
  $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if ($action == 'delete_complete'){
if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
  deleteCompletedTodoItem($_COOKIE['my_id'],$selected);
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
 
  updateTodoItem($_COOKIE['my_id'],$selected,$_POST['edit_description'],$_POST['edit_duedate'],$_POST['edit_duetime']);

  //}
  
 $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
 $resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
  include('list.php');
}
?>
