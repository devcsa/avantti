<?php

include "./core/connection.php";

$search_post = "";

if (isset($_GET['categoryID'])) {
  $categoryID = $_GET['categoryID'];
} else {
  $categoryID = "all";
}

if (isset($_GET['authorID'])) {
  $authorID = $_GET['authorID'];
} else {
  $authorID = "all";
}


if (isset($_GET['search'])) {
  $search_term = $_GET['search'];
} else {
  $search_term = "all";
}

// Obter Posts
if ($categoryID == "all" && $search_term == "all" && $authorID == "all") {
  $sql_posts = "SELECT posts.*,
  categories.name AS category_name,
  users.username AS author_name
  FROM posts
  INNER JOIN categories ON posts.category_id = categories.id
  INNER JOIN users ON posts.author_id = users.id WHERE visibility NOT IN ('Rascunho', 'Arquivado') ORDER BY posts.updated_at DESC";
} else {
  if ($search_term != "all") {
    $sql_posts = "SELECT posts.*,
    categories.name AS category_name,
    users.username AS author_name
    FROM posts
    INNER JOIN categories ON posts.category_id = categories.id
    INNER JOIN users ON posts.author_id = users.id WHERE title LIKE '%$search_term%' OR content LIKE '%$search_term%' OR categories.name LIKE '%$search_term%' AND visibility NOT IN ('Rascunho', 'Arquivado') ORDER BY posts.updated_at DESC";
  } else {
    if ($categoryID != "all") {
      $sql_posts = "SELECT posts.*,
      categories.name AS category_name,
      users.username AS author_name
      FROM posts
      INNER JOIN categories ON posts.category_id = categories.id
      INNER JOIN users ON posts.author_id = users.id WHERE category_id = $categoryID AND visibility NOT IN ('Rascunho', 'Arquivado') ORDER BY posts.updated_at DESC";
    } else {
      if ($authorID != "all") {
        $sql_posts = "SELECT posts.*,
        categories.name AS category_name,
        users.username AS author_name
        FROM posts
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.author_id = users.id WHERE author_id = $authorID AND visibility NOT IN ('Rascunho', 'Arquivado') ORDER BY posts.updated_at DESC";
      }
    }
  }
}
// INNER JOIN users ON posts.author_id = users.id WHERE posts.visibility <> 'Destaque' LIMIT $limit

$result_posts = $conn->query($sql_posts);

if ($result_posts->num_rows == 0) {
  $search_post = "none";
  // echo "Nenhuma postagem encontrada.";
}

// $search_post = $result_posts->num_rows;

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
