<?php
session_start();
if(!isset($_SESSION['email-user'])){
    header('Location: /view/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style.css">
    <style>
        body {
            margin: 0px;
            background-color: white;
        }
        header {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 1px 2px 1px 1px rgba(0, 0, 0, 0.151);
        }
        img {
            margin: 20px;
        }
    </style>
</head>
<body>
    <header>
        <img src="../../souce/logo.png" width="100" alt="">
        <a href="../service/logout.php"><img src="../../souce/quit-icon.png" width="80" alt=""></a>
    </header>
    
