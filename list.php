<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Todo List</title> 

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

  <link rel="stylesheet" type="text/css"
       href="https://cdn.datatables.net/r/dt/jqc-1.11.3,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,b-1.0.3,b-flash-1.0.3,b-html5-1.0.3/datatables.min.css" />
 
<script type="text/javascript"
       src="https://cdn.datatables.net/r/dt/jqc-1.11.3,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,b-1.0.3,b-flash-1.0.3,b-html5-1.0.3/datatables.min.js"></script>






<link rel="stylesheet" href="bootstrap.min.css"/>
<script type="text/javascript" href="bootstrap.min.js"></script> 
	<script type="text/javascript" href="jquery.min.js"></script> 
	
<!--<link rel="stylesheet" href="datatables.min.css"/>
<script type="text/javascript" href="datatables.min.js"></script> -->

 

<script type="text/javascript">
       $(document).ready(function() {
 $('#myTable').DataTable({
        "order": [[ 1, "desc" ]]
    } );
	   $('#myTable2').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
      
       });
</script>

<style type="text/css">
.dataTables_length {
       padding-top: 5px;
       padding-bottom: 5px;
       position:inherit;
      
      
}
.dataTables_filter {
       padding-top: 5px;
       padding-bottom: 5px;
      
}
div.dt-buttons {
       padding-top: 5px;
       padding-bottom: 5px;
       padding-left:5px;
       float:right;
      
      
	 
}

td {
width : 100px !important;
}
.container-fluid {
       padding-right: 6px;
}
</style>
 
 
  <style  type="text/css">
  div.s1 {
    position: absolute;
    top: 150px;
    left: 500px;
    width: 200px;
    height: 10px;
    border: none;
}
.welcome{
top:16%;
}
h1   {color: #2e6da4;
font-size:50px;

}


</style>
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</head> 











<html>
 
<body id="body-color">
<div class="welcome">
<?php
echo "</br></br>";
echo "</br></br>";
echo "</br></br>";
echo "</br></br>";

//echo "<h1> To do list system </h1></br>";
//echo "Welcome, ".$_COOKIE['my_firstname']." ". $_COOKIE['my_lastname'].        '</br>';
echo "Below is the list of your to-do items: ";
echo "</br></br>";
?>
</div>
<!--Starts  incomplete to do list -->
 <div class="panel panel-primary">
      <div class="panel-heading">Incomplete To Do items</div>
      <div class="panel-body">
<table width="100%"String class="table table-striped table-bordered"String id="myTable"String cellspacing="0"String>


<thead>
  <tr>
  <th>Item Description</th>
<th>Item Creation Date</th>
<th>Item Creation Time</th>
<th></th>
<th></th>
<th></th>

	</tr>
</thead>
	  <tfoot>
        </tfoot>


		<tbody>
	 <?php foreach($resultincomplete as $res):?>
        <tr>
	<td><?php echo $res['todo_item']; ?> </td>  
	<td><?php echo $res['createdate']; ?> </td>  
   <td><?php echo $res['createtime']; ?></td>  
 
     <td>
<form action='edit_todoitem.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='description' value='<?php echo $res['todo_item'] ?>'/>
<input type='hidden' name='createdate' value='<?php echo $res['createdate'] ?>'/>
<input type='hidden' name='createtime' value='<?php echo $res['createtime'] ?>'/>

<!--<input type='hidden' name='action' value='edit_item'/>-->
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Edit'  data-toggle="tooltip" title="Click here to edit a todo item"/>
</form>
</td>
<td>
<form action='todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete_item'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Delete'  data-toggle="tooltip" title="Click here to delete a todo item"/>
</form>
</td>
<td>
<form action='todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='mark_complete'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block" value='Mark As Complete'/>
</form>
   </td>

</tr>

	 <?php endforeach;?>
	 
                </tbody>

    </table> 
</div>
</div>
<!--Ends incomplete to do list -->
 

<!--Starts  complete to do list -->
 <div class="panel panel-primary">
      <div class="panel-heading">Completed To Do items</div>
      <div class="panel-body">
<table width="100%"String class="table table-striped table-bordered"String id="myTable2"String cellspacing="0"String>


<thead>
  <tr>
  <th>Item Description</th>
<th>Item Creation Date</th>
<th>Item Creation Time</th>
<th></th>
<th></th>

	</tr>
</thead>
	  <tfoot>
        </tfoot>


		<tbody>
	 <?php foreach($resultcomplete as $res):?>
        <tr>
	<td><?php echo $res['todo_item']; ?> </td>  
	<td><?php echo $res['createdate']; ?> </td>  
   <td><?php echo $res['createtime']; ?></td>  
 
     <td>
<form action='edit_todoitem.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='description' value='<?php echo $res['todo_item'] ?>'/>
<input type='hidden' name='createdate' value='<?php echo $res['createdate'] ?>'/>
<input type='hidden' name='createtime' value='<?php echo $res['createtime'] ?>'/>

<!--<input type='hidden' name='action' value='edit_item'/>-->
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Edit'  data-toggle="tooltip" title="Click here to edit a todo item"/>
</form>
</td>
<td>
<form action='todo.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete_item'/>
<input type='submit' id="button" class="btn btn-sm btn-primary btn-block"  value='Delete'  data-toggle="tooltip" title="Click here to delete a todo item"/>
</form>
</td>



	</tr>

	 <?php endforeach;?>
	 
                </tbody>

    </table> 
</div>
</div>
<!--Ends complete to do list -->



<div class="panel-body">
<form action='add_todoitem.php' method="post">
Click here to add a new todo item
<input type='hidden' name='action' value='show_add_item'/>
<input id="button" class="btn-primary"  type="submit" value="Add Todo Item" data-toggle="tooltip" title="Click here to add a new todo item"/>

</form>
 </div>

  



 </body>
 
</html>
