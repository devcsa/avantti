<?php

include "./core/connection.php";


$category_err = $category = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty(trim($_POST["name-category"]))) {

    $category_err = "Categoria é obrigatório!";
    header("Location: home.php?error=categoryexist");
  } else {

    $category = trim($_POST["name-category"]);

    $sqlFind = "SELECT id FROM categories WHERE name = '$category'";
    $resultFind = $conn->query($sqlFind);

    if ($resultFind->num_rows > 0) {

      $category_err = "Categoria já cadastrada!";
    }


    if (empty($category_err)) {

      $sql = "INSERT INTO categories (`name`) VALUES ('$category')";

      $result = $conn->query($sql);

      if ($result === TRUE) {
        header("Location: ./home.php?status=CategorySuccess");
        exit;
      } else {
        header("Location: ./home.php?status=CategoryError");
        exit;
      }
    }
  }

  $conn->close();
}
