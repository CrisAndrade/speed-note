<?php 
  session_start();
  
  #INCLUDES
  include "../connection/connection.php";
  include "../utils/messages.php";

  #PARAMETERS
  $email = trim($_POST['email']);
  $password = trim(md5($_POST['password']));

  #QUERY
  $query = "SELECT email FROM user WHERE email = '$email'";
  $result = mysqli_query($connection, $query);

  $row = mysqli_num_rows($result);

  #VALIDATIONS
  if(!isset($email) || $email == "" || !isset($password) || $password == "") {
    mysqli_close($connection);
    $_SESSION['message'] = $INVALID_PARAMETER;
    header('Location: ../view/login.php');
    exit();
  }
  if($row >= 1) {
    mysqli_close($connection);
    $_SESSION['email-user'] = $email;
    header('Location: ../view/list-note.php');
    exit();
  }

  #REGISTER
  mysqli_close($connection);
  $_SESSION['message'] = $USER_NOT_EXIST;
  header('Location: ../view/login.php');
  exit();
?>