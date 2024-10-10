<?php

include "../../../core/connection.php";


if (isset($_GET['userID'])) {
  $userID = $_GET['userID'];
}

$sql = "DELETE FROM users WHERE id=$userID";
$result = $conn->query($sql);

if ($result === TRUE && $conn->affected_rows > 0) {
  header("Location: ../../../users.php?status=DeleteUserSuccess");
  exit;
} else {
  header("Location: ../../../users.php?status=DeleteUserError");
  exit;
}

$conn->close();
