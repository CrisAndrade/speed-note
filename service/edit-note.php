<?php 
  session_start();
  
  #INCLUDES
  include "../connection/connection.php";
  include "../utils/messages.php";

  #PARAMETERS
  $idNote = $_POST['idNote'];
  $title = trim($_POST['title']);
  $note = trim($_POST['note']);
  $emailuser = $_SESSION['email-user'];

  #REGISTER
  $query = "UPDATE note SET title='$title', note='$note' WHERE id='$idNote'";
  mysqli_query($connection, $query);
  mysqli_close($connection);
  header('Location: ../view/list-note.php');
?>