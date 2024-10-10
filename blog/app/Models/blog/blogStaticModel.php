<?php

include "../core/connection.php";


// Obter Tags
$sql = "SELECT * FROM tags";
$result = $conn->query($sql);

if ($result->num_rows < 0) {

  echo "Nenhum registro encontrado.";
}


// Obter Categorias
$sql_categories = "SELECT * FROM categories";
$result_categories = $conn->query($sql_categories);

if ($result_categories->num_rows < 0) {

  echo "Nenhuma categoria encontrada.";
}


// Recent Posts
$sql_recents_posts = "SELECT * FROM posts WHERE visibility NOT IN ('Rascunho', 'Arquivado') ORDER BY updated_at DESC LIMIT 3";
$result_recents_posts = $conn->query($sql_recents_posts);

if ($result_recents_posts->num_rows < 0) {

  echo "Nenhuma postagem encontrada.";
}


$conn->close();