<?php
session_start();

if(isset($_SESSION['email-user'])){
    header('Location: /view/list-note.php');
    exit();
}
header('Location: /view/login.php');

?>