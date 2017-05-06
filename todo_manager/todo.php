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
	echo "inside add_item-todo file";
	echo $_POST['add_description'];
	echo $_POST['add_duedate'];
		echo $_POST['add_duetime'];
echo $_COOKIE['my_id'];

 // $description = filter_input(INPUT_POST, 'add_description');
  //$duedate = filter_input(INPUT_POST, 'add_duedate');
  //$duetime = filter_input(INPUT_POST, 'add_duetime');

   // echo $description;
	//echo $duedate;
	//echo $duetime;

//$itemduedate =  date("Y-m-d", strtotime($duedate));

//echo $itemduedate;

  if(isset($_POST['add_description']) and $_POST['add_description']!='' and isset($_POST['add_duedate']) and $_POST['add_duedate']!='' and isset($_POST['add_duetime']) and $_POST['add_duetime']!=''  ){
   addTodoItem($_COOKIE['my_id'],$_POST['add_description'],$_POST['add_duedate'],$_POST['add_duetime']);
  }
 
 echo "in todo php file for redirection";
  $result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if ($action == 'edit_incomplete'){


}else if ($action == 'delete_incomplete'){
if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];

		echo "inside delete_incomplete action -----";
		echo $_COOKIE['my_id'];
		echo $selected;
	deleteIncompleteTodoItem($_COOKIE['my_id'],$selected);
	}

		echo "inside php file after db delete ---- ";
		 


   $result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
}
else if ($action == 'edit_complete'){


}else if ($action == 'delete_complete'){



if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
  deleteCompletedTodoItem($_COOKIE['my_id'],$selected);
	}
echo "inside php file after db delete complete---- ";
$result = getTodoItems($_COOKIE['my_id']);
  include('list.php');

}else if ($action == 'mark_complete'){

if(isset($_POST['item_id'])){
	$selected = $_POST['item_id'];
  markCompleteTodoItem($_COOKIE['my_id'],$selected);
	}
echo "inside php file after mark complete todo item---------------- ";
$result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if ($action == 'cancel_edit'){
echo "inside cancel edit --------";
$result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
}else if ($action == 'edit_item'){
 /*if(isset($_POST['item_id']) and isset($_POST['edit_description']) and $_POST['edit_description']!='' and isset($_POST['edit_duedate']) and $_POST['edit_duedate']!='' and isset($_POST['edit_duetime']) and $_POST['edit_duetime']!=''){
*/
echo "inside edit_item action --1111111111111----------------";

//$result = getTodoItems($_COOKIE['my_id']);

  $selected = $_POST['item_id'];
  $value = $_COOKIE['my_id'];
 
 echo $selected;
 echo $value;

  updateTodoItem($_COOKIE['my_id'],$selected,$_POST['edit_description'],$_POST['edit_duedate'],$_POST['edit_duetime']);

  echo "    ----------inside edit_item action -------------2222222222222222222-----";

  //}
  
 $result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
}
?>
