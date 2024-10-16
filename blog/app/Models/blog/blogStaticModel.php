<?php

include __DIR__ . '/../../../core/connection.php';

header('Content-Type: application/json');

// Obter Tags
$sql_tags = "SELECT * FROM tags";
$result_tags = $conn->query($sql_tags);

if (!$result_tags) {
  echo json_encode(['error' => $conn->error]);
  exit;
}

$tags = [];

if ($result_tags->num_rows > 0) {
  while ($row = $result_tags->fetch_assoc()) {
    $tags[] = $row;
  }
}

// Obter Categorias
$sql_categories = "SELECT * FROM categories";
$result_categories = $conn->query($sql_categories);

if (!$result_categories) {
  echo json_encode(['error' => $conn->error]);
  exit;
}

$categories = [];

if ($result_categories->num_rows > 0) {
  while ($row = $result_categories->fetch_assoc()) {
    $categories[] = $row;
  }
}


// Recent Posts
$sql_recents_posts = "SELECT * FROM posts WHERE visibility NOT IN ('Rascunho', 'Arquivado') ORDER BY updated_at DESC LIMIT 3";
$result_recents_posts = $conn->query($sql_recents_posts);

if (!$result_recents_posts) {
  echo json_encode(['error' => $conn->error]);
  exit;
}

$recents_posts = [];

if ($result_recents_posts->num_rows > 0) {
  while ($row = $result_recents_posts->fetch_assoc()) {
    $recents_posts[] = $row;
  }
}


$response = [
  'tags' => $tags,
  'categories' => $categories,
  'recents_posts' => $recents_posts
];

echo json_encode($response);

$conn->close();
