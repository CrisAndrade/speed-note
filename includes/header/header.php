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
    <title>Speed Note</title>
    <style>
        body {
            margin: 0px;
        }
        header {
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.151);
        }
        img {
            margin: 10px;
        }
        a {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <header>
        <img src="../../souce/logo.png" width="70" alt="">
        <div>
            <a href="../service/logout.php">Sair da conta</a>
        </div>
    </header>
    
