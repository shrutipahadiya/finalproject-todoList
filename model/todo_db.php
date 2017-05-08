<?php
function deleteTodoItem($user_id,$todo_id){
  global $db;

  $query= 'delete from todos where id=:todo_id and user_id=:user_id';

   $statement = $db-> prepare($query);
     $statement->bindValue(':user_id',$user_id);
       $statement->bindValue(':todo_id',$todo_id);
	  // $statement->bindValue(':status','0');
       $statement->execute();
       $statement->closeCursor();
}


function addTodoItem($userid, $tododesc,$tododate,$todotime){
 global $db;
 $query = 'insert into todos(user_id,todo_item,createdate,createtime) values (:userid,:todo_text,:tododate,:todotime)';
  $statement = $db-> prepare($query);
  $statement->bindValue(':userid',$userid);
  $statement->bindValue(':todo_text',$tododesc);
  $statement->bindValue(':tododate',$tododate);
  $statement->bindValue(':todotime',$todotime);
  $statement->execute();
  $statement->closeCursor();
}


function getIncompleteTodoItems($user_id){
 global $db;
// echo $user_id;
 //echo "inside getIncompleteTodoItems";
 $query = 'select * from todos where user_id= :userid and status=:status order by createdate desc , createtime desc';
 $statement = $db-> prepare($query);
 $statement->bindValue(':userid',$user_id);
$statement->bindValue(':status','0');
 $statement->execute();
 $resultincomplete=$statement->fetchAll();
 $statement->closeCursor();
 return $resultincomplete;
}

function getCompleteTodoItems($user_id){
 global $db;
 //echo $user_id;
 //echo "inside getTodoItems";
 $query = 'select * from todos where user_id= :userid and  status=:status order by createdate desc , createtime desc ';
 $statement = $db-> prepare($query);
 $statement->bindValue(':userid',$user_id);
 $statement->bindValue(':status','1');
 $statement->execute();
 $resultcomplete=$statement->fetchAll();
 $statement->closeCursor();
 return $resultcomplete;
}

function deleteCompletedTodoItem($user_id,$todo_id){
  global $db;
  $query= 'delete from todos where id=:todo_id and user_id=:user_id and status=:status';

   $statement = $db-> prepare($query);
     $statement->bindValue(':user_id',$user_id);
       $statement->bindValue(':todo_id',$todo_id);
	   $statement->bindValue(':status','1');
       $statement->execute();
       $statement->closeCursor();
}



function markCompleteTodoItem($user_id,$todo_id){
  global $db;
  $query= 'update todos set status = :status  where id=:todo_id and user_id=:user_id';

   $statement = $db-> prepare($query);
   $statement->bindValue(':status','1');
	 $statement->bindValue(':user_id',$user_id);
       $statement->bindValue(':todo_id',$todo_id);
	 
       $statement->execute();
       $statement->closeCursor();



	  

}



function updateTodoItem($user_id,$todo_id,$tododesc,$tododate,$todotime){
  global $db;

  $query= 'update todos set todo_item = :tododesc, createdate=:tododate, createtime=:todotime , updatedate=CURDATE(), updatetime=CURTIME()  where id=:todoid and user_id=:userid';

   $statement = $db-> prepare($query);
     //  $statement->bindValue(':status','1');
	 $statement->bindValue(':userid',$user_id);
       $statement->bindValue(':todoid',$todo_id);
	   $statement->bindValue(':tododesc',$tododesc);
	   $statement->bindValue(':tododate',$tododate);
	   $statement->bindValue(':todotime',$todotime);
	   $statement->execute();
       $statement->closeCursor();
}

?>