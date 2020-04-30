<?php
  session_start(); 
  if ( isset( $_POST['reset'] ) )
  {
    session_unset();
    session_destroy();
    session_start();
  }
  if ( !isset( $_SESSION['ToDo'] ) )
  { 
    $_SESSION['ToDo'] = array();
  }
 
  if ( isset( $_POST ) && !empty( $_POST ) ) 
  {
   
      array_push( $_SESSION['ToDo'], $_POST['AddToDo'] );
    }
$message="Add To Do List";
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $message ?> </title>
</head>
<body>
  <h1> <?php echo $message ?> </h1>
  
  <form action="./index.php" method="POST">


    <label for="AddToDo">
      Add an tasks:
      <input type="text" name="AddToDo" id="AddToDo">
    </label>
    <input type="submit" value="AddToDo">
    <input type="submit" name="reset" value="Reset">
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

      <h2> Debugging</h2>
      Click to exand:
      <pre>
    <strong> Session:</strong>
    <?php var_dump( $_SESSION ); ?>
  </pre>
      <pre>
    <strong>POST</strong>
    <?php var_dump( $_POST ); ?>
  </pre>
  

</body>
</html>