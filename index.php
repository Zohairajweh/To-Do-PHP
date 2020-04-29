<?php
  session_start(); 
  if ( !isset( $_SESSION['ToDo'] ) )
  { 
    $_SESSION['ToDo'] = array();
  }
 
  if ( isset( $_POST ) && !empty( $_POST ) ) 
  {
   
      array_push( $_SESSION['ToDo'], $_POST['AddToDo'] );
    }
   
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AddToDo</title>
</head>
<body>
  <h1> AddToDo List </h1>
  
  <form action="./index.php" method="POST">


    <label for="AddToDo">
      Add an tasks:
      <input type="text" name="AddToDo" id="AddToDo">
    </label>
    <input type="submit" value="AddToDo">
  </form>
  <?php if ( !empty( $_SESSION['ToDo'] ) ) {  ?>
    <h2>Your Taks:</h2>
    <ul>
      <?php foreach ( $_SESSION['ToDo'] as $AddToDo ) { ?>
        <li>
          <?php echo $AddToDo; ?>
        </li>
      <?php } ?>
    </ul>
      <?php } ?>
  

</body>
</html>