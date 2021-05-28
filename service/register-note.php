<?php 
  session_start();
  
  #INCLUDES
  include "../connection/connection.php";
  include "../utils/messages.php";

  #PARAMETERS
  $title = trim($_POST['title']);
  $note = trim($_POST['note']);
  $emailuser = $_SESSION['email-user'];

  #REGISTER
  $query = "INSERT INTO note (title, note, emailuser) VALUES ('$title', '$note', '$emailuser')";
  mysqli_query($connection, $query);
  mysqli_close($connection);
  header('Location: ../view/list-note.php');
?>