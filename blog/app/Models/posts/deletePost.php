<?php

include "../../../core/connection.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_GET['postID'])) {
  $postID = $_GET['postID'];
}

$sql = "DELETE FROM posts WHERE id=$postID";
$result = $conn->query($sql);

if ($result === TRUE && $conn->affected_rows > 0) {
  header("Location: ../../../posts.php?status=DeletePostSuccess");
  exit;
} else {
  header("Location: ../../../posts.php?status=DeletePostError");
  exit;
}

$conn->close();
