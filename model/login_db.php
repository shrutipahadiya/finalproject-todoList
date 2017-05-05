<?php
function createUser($username, $password,$firstname,$lastname,$email,$phone,$birthdate,$gender){
 global $db;
 $query = 'select * from users where emailaddress = :email';
$statement = $db-> prepare($query);
$statement->bindValue(':email',$email);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
if($count > 0)
{
return true;
}else{
$query = 'insert into users (username,passwordHash,firstName,lastName,emailAddress,phoneNumber,birthDate,gender) values (:username,:password,:firstname,:lastname,:email,:phone,:birthdate,:gender)';

//Code to format DOB
//$date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
//$birthdate = $birthyear.'_'.$birthmonth.'_'.$birthday;
//$birthdate = str_replace("_","-",$date);

//Code ends to format DOB

//$date = date_create("$birthyear.'_'.$birthmonth.'_'.$birthday");
//$date1 = date_format($date,"Y-m-j");
//04062009

//echo "birthdate";
//echo $birthdate;

$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->bindValue(':firstname',$firstname);
$statement->bindValue(':lastname',$lastname);
$statement->bindValue(':email',$email);
$statement->bindValue(':phone',$phone);
$statement->bindValue(':birthdate',$birthdate);
$statement->bindValue(':gender',$gender);
$statement->execute();
$statement->closeCursor();
return false;
}

}
function isUserValid($username,$password){
  global $db;
  $query = 'select * from users where emailAddress = :email and passwordHash = :pass';
 $statement = $db->prepare($query);
  $statement->bindValue(':email',$username);
$statement->bindValue(':pass',$password);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();

$count=$statement->rowCount();

//echo $username;
//echo $result[0]['id'];
//echo $result[0]['firstName'];
//echo $result[0]['lastName'];
//echo $result[0]['emailAddress'];
//echo $result[0]['username'];



if($count == 1) {
 setcookie('login',$username);   //email
 setcookie('islogged',true);
 setcookie('my_id',$result[0]['id']);
setcookie('my_firstname',$result[0]['firstName']);
setcookie('my_lastname',$result[0]['lastName']);
setcookie('my_email',$result[0]['emailAddress']);
setcookie('my_username',$result[0]['username']);

return true;
 
 }else{


setcookie('login',false);
 unset($_COOKIE['login']);
 setcookie('islogged',false);

setcookie('my_id',false);
unset($_COOKIE['my_id']);

setcookie('my_firstname',false);
unset($_COOKIE['my_firstname']);

setcookie('my_lastname',false);
unset($_COOKIE['my_lastname']);

setcookie('my_email',false);
unset($_COOKIE['my_email']);

setcookie('my_username',false);
unset($_COOKIE['my_username']);
 


 //setcookie('id',false);


 return false;
 }
 }
 


 function isUserExist($username,$password){
  global $db;
  $query = 'select * from users where emailAddress = :email';
 $statement = $db->prepare($query);
  $statement->bindValue(':email',$username);
//$statement->bindValue(':pass',$password);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();

$count=$statement->rowCount();

if($count == 1) {
 //setcookie('login',$username);
 //setcookie('my_id',$result[0]['id']);
 //setcookie('islogged',true);
return true;
 
 }else{
 //unset($_COOKIE['login']);
 //setcookie('login',false);
 //setcookie('islogged',false);
 //setcookie('id',false);
 return false;
 }
 }
 ?>
