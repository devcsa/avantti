<?php


$userID = $userId = $name = $email = $phone = $status = $type =  $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // // Loop através de todas as variáveis $_POST e exiba seus nomes e valores
  // foreach ($_POST as $key => $value) {
  //   echo "Nome da variável: " . $key . ", Valor: " . $value . "<br>";
  // }

  // exit;

  include "../../../core/connection.php";


  // Verifica se cada variável $_POST está definida e não está vazia
  if (!isset($_POST["name"]) || empty($_POST["name"])) {
    die("Erro: O campo 'name' não está definido ou está vazio.");
  }

  if (!isset($_POST["email"]) || empty($_POST["email"])) {
    die("Erro: O campo 'email' não está definido ou está vazio.");
  }

  if (!isset($_POST["phone"]) || empty($_POST["phone"])) {
    die("Erro: O campo 'phone' não está definido ou está vazio.");
  }

  if (!isset($_POST["password"]) || empty($_POST["password"])) {
    die("Erro: O campo 'password' não está definido ou está vazio.");
  }

  if (!isset($_POST["status_user"]) || empty($_POST["status_user"])) {
    die("Erro: O campo 'status_user' não está definido ou está vazio.");
  }

  if (!isset($_POST["type_user"]) || empty($_POST["type_user"])) {
    die("Erro: O campo 'type_user' não está definido ou está vazio.");
  }

  $userId = $_POST["userId"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = preg_replace('/[\s()-]/', '', $_POST["phone"]);
  $password = $_POST["password"];
  $status = $_POST["status_user"];
  $type = $_POST["type_user"];


  if ($name == "" || $email == "" || $phone == "" ||  $password == "" || $status == "" || $type == "") {
    header("Location: ../../../../profile.php?userID=" . $userId . "&msgStatus=blank");
    exit;
  }

  $sqlFind = "SELECT email FROM users WHERE email = '$email' AND id <> $userId";
  $resultFind = $conn->query($sqlFind);

  if ($resultFind->num_rows > 0) {
    header("Location: ../../../../profile.php?userID=" . $userId . "&msgStatus=UserExist");
    exit;
  }

  // Criptografando a senha
  // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "UPDATE users SET username = '$name', email = '$email', phone_number = '$phone', status_user_id = $status,
    type_user_id = $type WHERE id = $userId";

  //  $sql = "UPDATE users SET username = '$name', email = '$email', phone_number = '$phone', password = '$hashed_password',
  //         status_user_id = $status, type_user_id = $type WHERE user_id = $userId";

  $result = $conn->query($sql);

  if ($conn->affected_rows > 0) {

    header("Location: ../../../../profile.php?userID=" . $userId . "&msgStatus=editUserSuccess");

    exit;
  } else {
    header("Location: ../../../../profile.php?userID=" . $userId . "&msgStatus=editUserError");
    exit;
  }
} else {


  $msgStatus = $userID = $userId = $name = $email = $phone = $status = $type = $userphoto =  $password = "";


  if (isset($_GET['userID'])) {
    $userID = $_GET['userID'];
  }

  if (isset($_GET['msgStatus'])) {
    $msgStatus = $_GET['msgStatus'];
  }

  include "./core/connection.php";


  $sql = "SELECT users.*,
                type_user.type AS type_user,
                status_user.status AS status_user
        FROM users
        INNER JOIN type_user ON users.type_user_id = type_user.id
        INNER JOIN status_user ON users.status_user_id = status_user.id WHERE users.id = $userID";


  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $userId = $row['id'];
    $name = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $userphoto = "./app/assets/img/users/" . $row['user_photo'];
    $phone = preg_replace('/[\s()-]/', '', $row['phone_number']);
    $statusUser = $row['status_user'];
    $typeUser = $row['type_user'];
    $typeUserId = $row['type_user_id'];
    $statusUserId = $row['status_user_id'];
  }

  // Consulta para Perfis de Usuários
  $sql_typeUser = "SELECT * FROM type_user";

  $result_typeUser = $conn->query($sql_typeUser);

  if ($result_typeUser->num_rows < 0) {

    echo "Nenhum Tipo encontrado!";
  }

  // Consulta para Status de Usuários
  $sql_statusUser = "SELECT * FROM status_user";

  $result_statusUser = $conn->query($sql_statusUser);

  if ($result_statusUser->num_rows < 0) {

    echo "Nenhum Tipo encontrado!";
  }
}



$conn->close();
