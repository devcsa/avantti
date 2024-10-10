<?php

include "../../../core/connection.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_GET['categoryID'])) {
  $categoryID = $_GET['categoryID'];
}

$sql = "DELETE FROM categories WHERE id=$categoryID";
$result = $conn->query($sql);

if ($result === TRUE && $conn->affected_rows > 0) {
  header("Location: ../../../categories.php?status=DeleteCategorySuccess");
  exit;
} else {
  header("Location: ../../../categories.php?status=DeleteCategoryError");
  exit;
}

$conn->close();
