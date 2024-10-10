<?php


include "../../../core/connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"]) && isset($_POST["status_user"]) && isset($_POST["type_user"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = preg_replace('/[\s()-]/', '', $_POST["phone"]);
    $senha = $_POST["password"];
    $status = $_POST["status_user"];
    $type = $_POST["type_user"];

    if ($name == "" || $email == "" || $phone == "" ||  $senha == "" || $status == "" || $type == "") {
      header("Location: ../../../home.php?status=UserBlank");
      exit;
    }

    $sqlFind = "SELECT email FROM users WHERE email = '$email'";
    $resultFind = $conn->query($sqlFind);

    if ($resultFind->num_rows > 0) {
      header("Location: ../../../home.php?status=UserExist?$name?$email?$phone?$senha?$status?$type");
      exit;
    }

    // Criptografando a senha
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (`username`, `email`, `phone_number`, `password`, `status_user_id`, `type_user_id`) VALUES
    ('$name', '$email', '$phone', '$hashed_password', $status, $type)";

    $result = $conn->query($sql);

    if ($result === TRUE) {
      header("Location: ../../../home.php?status=UserSuccess");
      exit;
    } else {
      header("Location: ../../../home.php?status=UserError");
      exit;
    }
  } else {
    echo "Erro ao selecionar informações do usuário";
  }
}


$conn->close();