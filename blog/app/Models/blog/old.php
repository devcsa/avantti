<?php

include "./core/connection.php";

// Receba o deslocamento e o limite dos dados POST
if (isset($_GET['limit'])) {
  $limit = $_GET['limit'];
} else {
  $limit = 4;
}

$sql = "SELECT posts.*,
categories.name AS category_name,
users.username AS author_name
FROM posts
INNER JOIN categories ON posts.category_id = categories.id
INNER JOIN users ON posts.author_id = users.id WHERE posts.visibility <> 'Destaque' LIMIT $limit";

$result = $conn->query($sql);

if ($result->num_rows > 0) {


  while ($row = $result->fetch_assoc()) {

    $post_Id = $row["id"];
    $formatted_date = date("d M, Y", strtotime($row["updated_at"]));
    $image_cover = "./app/assets/img/posts/destaques/" . $row["image_cover"];
    $author_name = $row["author_name"];
    $title = $row["title"];
    $content = $row["content"];
    $short_content = strlen($content) > 285 ? substr($content, 0, 285) . '...' : $content;
    $visibility = $row["visibility"];


    echo "<input type='hidden' class='postId'" . $post_Id . ">";
    echo "<div class='card mb-4'>";
    echo "<a href='#'><img class='card-img-top' src=" . $image_cover . " alt='Imagem Capa Post' /></a>";
    echo "<div class='card-body'>";
    echo "<div class='row ml-1 mb-2'>";
    echo "<div class='small mr-3'><i class='fa fa-user' aria-hidden='true'></i>" . $author_name . "</div>";
    echo "<div class='small'><i class='fa fa-calendar mr-1' aria-hidden='true'></i> " . $formatted_date . "</div>";
    echo "</div>";
    echo "<h2 class='card-title h4'>" . $title . "</h2>";
    echo "<p class='card-text'>" . $short_content . "</p>";
    echo "<a class='btn btn-read-more text-uppercase' href='#'>Ler mais <i class='fa fa-arrow-right'
    aria-hidden='true'></i></a>";
    echo "</div>";
    echo "</div>";
  }
}

$conn->close();
