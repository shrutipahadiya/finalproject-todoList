<?php
function createUser($username, $password,$firstname,$lastname,$email,$phone,$birthday,$birthmonth,$birthyear,$gender){
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

$birthdate = $birthyear . "-" . $birthmonth . "-" . $birthday;
//Code ends to format DOB



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
if($count == 1) {
 setcookie('login',$username);
 setcookie('my_id',$result[0]['id']);
 setcookie('islogged',true);
return true;
 
 }else{
 unset($_COOKIE['login']);
 setcookie('login',false);
 setcookie('islogged',false);
 setcookie('id',false);
 return false;
 }
 }
 ?>
