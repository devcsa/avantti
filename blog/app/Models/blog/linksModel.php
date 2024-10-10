<?php

include "./core/connection.php";


$sql = "SELECT * FROM tags";
$result = $conn->query($sql);

if ($result->num_rows < 0) {

  echo "Nenhum registro encontrado.";
}


// Consulta para obter as categorias
$sql_categories = "SELECT * FROM categories";
$result_categories = $conn->query($sql_categories);

if ($result_categories->num_rows < 0) {

  echo "Nenhuma categoria encontrada.";
}


$conn->close();
