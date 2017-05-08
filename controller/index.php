<head>
<link rel="stylesheet" href="../css/style.css">
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<?php
require('../model/db_connect.php');
require('../model/todo_db.php');
require('../model/login_db.php');


$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
 $action = "show_login_page";
}
if($action == "show_login_page")
{
 header('Location:../login.php');
}else if($action=='test_user'){
$username = $_POST['reg_uname'];
$password = $_POST['reg_password'];
$suc = isUserValid($username,$password);
$userExists = isUserExist($username);

if($userExists == true){
   if($suc == true){
	 
	//echo $_COOKIE['my_id'];
	$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
    
	include('../view/header1.php');
	include("../view/list.php");
   }else{

 header("Location: ../view/loginError.php");

   }


}else{
 header("Location: ../view/badInfo.php");
}


}else if($action == 'signup')
{
  
  $name = filter_input(INPUT_POST, 'reg_uname');
  $pass = filter_input(INPUT_POST, 'reg_password');
  $firstname = filter_input(INPUT_POST, 'reg_firstname');
  $lastname = filter_input(INPUT_POST, 'reg_lastname');
  $email = filter_input(INPUT_POST, 'reg_email');
  $phonenumber = filter_input(INPUT_POST, 'reg_phonenumber');
  
  $date = filter_input(INPUT_POST, 'reg_birthdate');
$birthdate =  date("Y-m-d", strtotime($date));
$gender = filter_input(INPUT_POST, 'reg_gender');

   //if(isset($name) and isset($pass) and isset($firstname) and isset($lastname) and isset($email) and isset($phonenumber) 
	 //  and isset(birthdate) and isset(gender))
	
 // {
   // echo "22222222222";
    $user_exists = createUser($name,$pass,$firstname,$lastname,$email,$phonenumber,$birthdate,$gender);
    if($user_exists == true)
    {
   include('../view/user_exists.php');
    }else{
		include('../view/createuser_success.php');
		//header("Location: view/login.php");
    //}

  }
  //else{
 //include('view/invalid_data.php');
  //}

}/*else if($action == 'add')
{
  if(isset($_POST['description']) and $_POST['description']!='' ){
   addTodoItem($_COOKIE['my_id'],$_POST['description']);
  }
 
  $resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
  include('todo_manager/list.php');*/
else if($action == 'delete'){
 if(isset($_POST['item_id'])){
 $selected = $_POST['item_id'];
 deleteTodoItem($_COOKIE['my_id'],$selected);

 }

$resultincomplete = getIncompleteTodoItems($_COOKIE['my_id']);
	$resultcomplete = getCompleteTodoItems($_COOKIE['my_id']);
 include('../view/list.php');
}
?>
