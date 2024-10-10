<?php

include "../../../core/connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST["name-category"]) && isset($_POST["categoryID"])) {

    $category = $_POST["name-category"];
    $categoryID = $_POST["categoryID"];


    $sqlFind = "SELECT name FROM categories WHERE name = '$category' AND id <> $categoryID";
    $resultFind = $conn->query($sqlFind);

    if ($resultFind->num_rows > 0) {
      header("Location: ../../../../categories.php?status=CategoryExist?$category");
      exit;
    }

    $sql = "UPDATE categories SET `name` = '$category' WHERE id = $categoryID";
    $result = $conn->query($sql);

    if ($conn->affected_rows > 0) {
      header("Location: ../../../../categories.php?status=CategorySuccess");
      exit;
    } else {
      header("Location: ../../../../categories.php?status=CategoryError");
      exit;
    }
  } else {
    echo "Erro ao selecionar informações da categoria.";
  }
}


$conn->close();
