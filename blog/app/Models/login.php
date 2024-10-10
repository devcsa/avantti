<?php

include "../../core/connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST["email-login"]) && isset($_POST["password"])) {
    $email = $_POST["email-login"];
    $senha = $_POST["password"];

    if ($email == "" || $senha == "") {
      header("Location: ../../index.php?status=LoginBlank");
      exit;
    }

    $sql = "SELECT * FROM users WHERE email = '$email' AND status_user_id <> 2";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      $userID = $row['id'];
      $userName = $row['username'];
      $typeUser = $row['type_user_id'];

      if (password_verify($senha, $row['password'])) {
        if ($row['status_user_id'] === 3) {
          echo "Conta não ativada! Clique no link de verificação enviado no seu e-mail para ativar a sua conta.";
        } else {

          session_id("admBlog");
          session_start();

          // ARMAZENAR DADOS NAS VARIÁVEIS DE SESSÃO
          $_SESSION["loggedin"] = true;
          $_SESSION["id"] = $userID;
          $_SESSION["username"] = $userName;
          $_SESSION["email"] = $email;
          $_SESSION["type_user_id"] = $typeUser;

          header("Location: ../../home");
          exit;
        }
      } else {
        header("Location: ../../index.php?status=LoginError");
        exit;
      }
    } else {
      header("Location: ../../index.php?status=LoginNotFound");
      exit;
    }
  }
}

$conn->close();
