<?php

include "./core/connection.php";


$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<select class='form-control' id='category' name='category'>";
  echo "<option value=''></option>";


  while ($row = $result->fetch_assoc()) {
    echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
  }

  echo "</select>";
} else {
  echo "Nenhum registro encontrado.";
}

$conn->close();
