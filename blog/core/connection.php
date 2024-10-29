<?php

// $environment = "PRODUCTION";
// $servername = "";
// $username = "";
// $password = "";
// $dbname = "";

$environment = "DEVELOPMENT";
$servername = "montre.vpscronos0234.mysql.dbaas.com.br";
$username = "montre";
$password = "montreAvantti24#";
$dbname = "montre";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
