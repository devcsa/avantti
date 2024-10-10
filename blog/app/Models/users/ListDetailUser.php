<?php

include "./core/connection.php";

// Carrega Lista Type User
$sql_type_user = "SELECT * FROM type_user";
$result_type_user = $conn->query($sql_type_user);

// Carrega Lista Status User
$sql_status_user = "SELECT * FROM status_user";
$result_status_user = $conn->query($sql_status_user);



$conn->close();
