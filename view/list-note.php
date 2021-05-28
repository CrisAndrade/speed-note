<link rel="stylesheet" href="_css/basic.css">
<link rel="stylesheet" href="_css/list-note.css">
<a class="add-button" href="register-note.php"><img src="../souce/mais-icon.png" width="100" alt=""></a>

<?php 
  session_start();
  
  #INCLUDES
  include "../connection/connection.php";
  include "../includes/header/header.php";
  
  $emailuser = $_SESSION['email-user'];

  #QUERY
  $query = "SELECT * FROM note WHERE emailuser = '$emailuser'";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_array($result)) {
      echo "<div class='box'>";

      echo "<div class='title'>";
      echo $row['title'];
      echo "</div>";

      echo "<div class='note'><p>";
      echo $row['note'];
      echo "</p></div>";

      echo "<form action='edit-note.php' method='post'>";
      echo "<button type='submit'><img class='edit-icon' src='../souce/editar-icon.png' alt=''></button>";
      echo "</form>";
      echo "</div>";
  }
?>
