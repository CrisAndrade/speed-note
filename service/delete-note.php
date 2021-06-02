<?php 

  #INCLUDES
  include "../connection/connection.php";
  include "../utils/messages.php";

  #PARAMETERS
  $idNote = trim($_POST['idNote']);

  #QUERY
  $query = "DELETE FROM note WHERE id='$idNote'";
  $result = mysqli_query($connection, $query);

  #DELETADO
  mysqli_close($connection);
  $_SESSION['message'] = $DELETED_SUCCESS;
  header('Location: ../view/list-note.php');
  exit();
?>