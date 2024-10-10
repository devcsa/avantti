<?php

include "./core/connection.php";

// Verifica se o ID da postagem foi fornecido na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $post_id = $_GET['id'];

  $sql = "SELECT * FROM posts WHERE id = $post_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $title = $row["title"];
    $visibility = $row["visibility"];
    $content = $row["content"];
    $image_cover = "./app/assets/img/posts/destaques/" . $row["image_cover"];
    $image_fileName = $row["image_cover"];


    // Consulta para obter as categorias
    $sql_categories = "SELECT * FROM categories";
    $result_categories = $conn->query($sql_categories);

    if ($result_categories->num_rows < 0) {

      echo "Nenhuma categoria encontrada.";
    }
  }


  $conn->close();
} else {
  echo "ID da postagem não fornecido na URL.";
}
