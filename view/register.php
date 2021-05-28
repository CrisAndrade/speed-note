<?php session_start() ?>

<link rel="stylesheet" href="_css/login.css">
<link rel="stylesheet" href="_css/basic.css">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <a href="login.php">
        <h2 class="inactive underlineHover"> Sign In </h2>
    </a>
    <h2 class="active">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://png.pngtree.com/png-vector/20190811/ourlarge/pngtree-student-notes-books-student-notes-business-logo-template--fla-png-image_1656063.jpg" id="icon" alt="User Icon" />
    </div>
    
    <!-- Error message -->
    <?php
      echo $_SESSION['message'];
      session_destroy();
    ?>

    <!-- Login Form -->
    <form action="../service/register.php" method="post">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="e-mail">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Register">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>