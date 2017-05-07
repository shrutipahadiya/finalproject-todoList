<?php
session_start();
session_destroy();
header('Location: login.php');
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
exit;
?>
