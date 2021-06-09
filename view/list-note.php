<?php 
  include "../connection/connection.php";
  include "../includes/header/header.php"; 
?>

<link rel="stylesheet" href="_css/basic.css">
<link rel="stylesheet" href="_css/list-note.css">
<a class="add-button" href="register-note.php"><img src="../souce/mais-icon.png" width="25" alt=""></a>
<!-- <a class="search-button" href="register-note.php"><img src="../souce/pesquisar-icon.png" width="25" alt=""></a> -->

<?php 
  session_start();

  $emailuser = $_SESSION['email-user'];

  #QUERY
  $query = "SELECT * FROM note WHERE emailuser = '$emailuser' ORDER BY id DESC";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_array($result)) {
      echo "<div class='box'>";

      echo "<div class='title'><strong>";
      echo $row['title'];
      echo "</strong></div>";

      echo "<div class='note'><textarea class='note' readonly>";
      echo $row['note'];
      echo "</textarea></div>";

      //DELETE BUTTON
      echo "<form action='../service/delete-note.php' method='post'>";
      echo "<input type='hidden' value=" . $row['id'] . " id='idNote' name='idNote'>";
      echo "<button type='submit'><img class='button-icon' src='../souce/excluir-icon.png' alt=''></button>";
      echo "</form>";

      //EDIT BUTTONx
      echo "<form action='register-note.php' method='post'>";
      echo "<input type='hidden' value=" . $row['id'] . " id='idNote' name='idNote'>";
      echo "<button type='submit'><img class='button-icon' src='../souce/editar-icon.png' alt=''></button>";
      echo "</form>";

      echo "</div>";
  }

  include "../includes/footer/footer.php";
?>
