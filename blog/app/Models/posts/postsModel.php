<?php

include "./core/connection.php";

// $sql = "SELECT posts.*, categories.name AS category_name FROM posts INNER JOIN categories ON posts.category_id = categories.id";


$sql = "SELECT posts.*,
categories.name AS category_name,
users.username AS author_name
FROM posts
INNER JOIN categories ON posts.category_id = categories.id
INNER JOIN users ON posts.author_id = users.id ORDER BY posts.updated_at DESC
";




$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table table-striped'>";
  echo "<thead class='thead-inverse table-posts'><tr><th>#</th><th>Título</th><th>Autor</th><th>Categoria</th><th>Atualização</th><th>Status</th></tr></thead>";
  echo "<tbody>";

  while ($row = $result->fetch_assoc()) {

    $title = $row["title"];
    $short_title = strlen($title) > 60 ? substr($title, 0, 60) . '...' : $title;

    echo "<tr class='row-table'>";
    echo "<td class='row-table postId td-posts'>" . $row["id"] . "</td>";
    echo "<td class='row-table'>" . $short_title . "</td>";
    echo "<td class='row-table'>" . $row["author_name"] . "</td>";
    echo "<td class='row-table'>" . $row["category_name"] . "</td>";

    // Formatando a data e hora
    $formatted_date = date("d/m/y H:i", strtotime($row["updated_at"]));

    echo "<td class='row-table'>" . $formatted_date . "</td>";
    echo "<td class='row-table'>" . $row["visibility"] . "</td>";
    echo "<td>";
    echo "<div class='dropdown'>";
    echo "<button class='btn btn-outline-primary dropdown-toggle' type='button' id='dropdownMenu' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Ações</button>";
    echo "<div class='dropdown-menu dropdown-menu-dark' aria-labelledby='dropdownMenu'>";
    echo "<a id='user-update' class='postUpdate dropdown-item' href='updatePost?id=" . $row['id'] . "'><i class='color-blue fa fa-edit'></i> Alterar</a>";
    echo "<button id='post-delete' class='postDelete dropdown-item' type='button'><i class='color-red fa fa-remove'></i> Excluir</button>";
    echo "</div>";
    echo "</div>";
    echo "</td>";
    echo "</tr>";

    // echo '<td class="row-table"><a class="btn btn-secondary" href="updatePost.php?id=' . $row["id"] . '"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Abrir </a></td>';
    // echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "Nenhum registro encontrado.";
}

// TOTAL DE POSTS

$sql_count_posts = "SELECT COUNT(*) AS total_posts FROM posts";
$result_count_posts = $conn->query($sql_count_posts);

if ($result_count_posts) {
  $row = $result_count_posts->fetch_assoc();
  $total_posts = $row["total_posts"];
  // echo "Total de posts: " . $total_posts;
} else {
  echo "Erro ao contar posts: " . $conn->error;
}


$sql_count_users = "SELECT COUNT(*) AS total_users FROM users";
$result_count_users = $conn->query($sql_count_users);

if ($result_count_users) {
  $row = $result_count_users->fetch_assoc();
  $total_users = $row["total_users"];
  // echo "Total de usuários: " . $total_users;
} else {
  echo "Erro ao contar usuários: " . $conn->error;
}

$sql_count_categories = "SELECT COUNT(*) AS total_categories FROM categories";
$result_count_categories = $conn->query($sql_count_categories);

if ($result_count_categories) {
  $row = $result_count_categories->fetch_assoc();
  $total_categories = $row["total_categories"];
  // echo "Total de categorias: " . $total_categories;
} else {
  echo "Erro ao contar usuários: " . $conn->error;
}



$conn->close();
