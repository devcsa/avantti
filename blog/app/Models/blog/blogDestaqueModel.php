<?php

include "./core/connection.php";

$sql = "SELECT posts.*,
categories.name AS category_name,
users.username AS author_name
FROM posts
INNER JOIN categories ON posts.category_id = categories.id
INNER JOIN users ON posts.author_id = users.id WHERE posts.visibility = 'Destaque'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();
  $post_Id = $row["id"];
  $author_name = $row["author_name"];
  $formatted_date = date("d M, Y", strtotime($row["updated_at"]));
  $title = $row["title"];
  $visibility = $row["visibility"];

  $content = $row["content"];
  $short_content = strlen($content) > 285 ? substr($content, 0, 285) . '...' : $content;

  $image_cover = "./app/assets/img/posts/destaques/" . $row["image_cover"];
}


$conn->close();