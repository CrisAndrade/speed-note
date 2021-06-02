<?php 
  include "../connection/connection.php";
  include "../includes/header/header.php"; 
?>

<link rel="stylesheet" href="_css/basic.css">
<link rel="stylesheet" href="_css/register-note.css">

<!-- Register note form -->
<?php if (isset($_POST['idNote'])): ?>

<?php
    #PARAMETERS
    $idNote = trim($_POST['idNote']);

    #QUERY
    $query = "SELECT * FROM note WHERE id = '$idNote'";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='justify-content'>";
      echo "<form action='../service/edit-note.php' method='post'>";

      echo "<input type='text' name='idNote' id='idNote' value='";
      echo $row['id'];
      echo "' hidden>";

      echo "<input type='text' id='title' class='title' name='title' placeholder='Título' value='";
      echo $row['title'];
      echo "'/>";

      echo "<textarea name='note' id='note' class='note' cols='45' rows='20' placeholder='Anotação...'>";
      echo $row['note'];
      echo "</textarea>";
      
      echo "<div class='buttons'>";

      echo "<a href='list-note.php'>Cancelar</a>";
      echo "<button type='submit' class='submit'>Salvar</button>";

      echo "</div>";
      
      echo "</form>";
      echo "</div>";
    }
?>

<?php else: ?>

  <div class="justify-content">
    <form action="../service/register-note.php" method="post">
      <input type="text" name="idNote" id="idNote" value="" hidden>

      <input type="text" id="title" class="title" name="title" placeholder="Título">
      <textarea name="note" id="note" class="note" cols="45" rows="20" placeholder="Anotação..."></textarea>

      <div class="buttons">
        <a href="list-note.php">Cancelar</a>
        <button type="submit" class="submit">Salvar</button>
      </div>
    </form>
  </div>

<?php endif ?>

