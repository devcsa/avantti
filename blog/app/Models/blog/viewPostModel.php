<?php

include "./core/connection.php";

if (isset($_GET['postID'])) {
  $postID = $_GET['postID'];
} else {
  $postID = 6;
}


// Filtrar Post
$sql_post_view = "SELECT posts.*,
categories.name AS category_name,
users.username AS author_name
FROM posts
INNER JOIN categories ON posts.category_id = categories.id
INNER JOIN users ON posts.author_id = users.id WHERE posts.id = $postID";

$result_post_view = $conn->query($sql_post_view);

if ($result_post_view->num_rows > 0) {

  $row_post_view = $result_post_view->fetch_assoc();

  $meses = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
  $dias_semana = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");

  $created_at = new DateTime($row_post_view["created_at"]);
  $updated_at = new DateTime($row_post_view["updated_at"]);
  $created_date = $created_at->format("d ") . $meses[$created_at->format("n") - 1] . $created_at->format(", Y");
  $updated_date = $updated_at->format("d ") . $meses[$updated_at->format("n") - 1] . $updated_at->format(", Y");

  $post_Id = $row_post_view["id"];
  $image_cover = "./app/assets/img/posts/destaques/" . $row_post_view["image_cover"];
  $authorID = $row_post_view["author_id"];
  $author_name = $row_post_view["author_name"];
  $title = $row_post_view["title"];
  $content = $row_post_view["content"];
  $categoryID = $row_post_view["category_id"];
  $category = $row_post_view["category_name"];
} else {
  echo "Postagem não encontrada!";
}


$conn->close();
