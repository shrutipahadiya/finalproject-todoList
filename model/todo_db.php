<?php
function deleteIncompleteTodoItem($user_id,$todo_id){
  global $db;

echo "inside----------------deleteIncompleteTodoItem ";

echo $user_id;
echo $todo_id;

echo "inside---end of-------------deleteIncompleteTodoItem ";



  $query= 'delete from todos where id=:todo_id and user_id=:user_id and status=:status';

   $statement = $db-> prepare($query);
     $statement->bindValue(':user_id',$user_id);
       $statement->bindValue(':todo_id',$todo_id);
	   $statement->bindValue(':status','0');
       $statement->execute();
       $statement->closeCursor();

}
function addTodoItem($userid, $tododesc,$tododate,$todotime){
 echo "inside addTodoItem db file";
 global $db;
 $query = 'insert into todos(user_id,todo_item,createdate,createtime) values (:userid,:todo_text,:tododate,:todotime)';
  $statement = $db-> prepare($query);
  $statement->bindValue(':userid',$userid);
  $statement->bindValue(':todo_text',$tododesc);
  $statement->bindValue(':tododate',$tododate);
  $statement->bindValue(':todotime',$todotime);
  $statement->execute();
  $statement->closeCursor();
  echo "todo item inserted into database";

}
function getTodoItems($user_id){
 global $db;
 echo $user_id;
 echo "inside getTodoItems";
 $query = 'select * from todos where user_id= :userid';
 $statement = $db-> prepare($query);
 $statement->bindValue(':userid',$user_id);
 $statement->execute();
 $result=$statement->fetchAll();
 $statement->closeCursor();
 return $result;
}




function deleteCompletedTodoItem($user_id,$todo_id){
  global $db;

echo "inside----------------deleteCompleteTodoItem ";

echo $user_id;
echo $todo_id;

echo "inside---end of-------------deleteCompleteTodoItem ";



  $query= 'delete from todos where id=:todo_id and user_id=:user_id and status=:status';

   $statement = $db-> prepare($query);
     $statement->bindValue(':user_id',$user_id);
       $statement->bindValue(':todo_id',$todo_id);
	   $statement->bindValue(':status','1');
       $statement->execute();
       $statement->closeCursor();

}

?>