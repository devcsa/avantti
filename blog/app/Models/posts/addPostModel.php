<?php

include "../../../core/connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // // Loop através de todas as variáveis $_POST e exiba seus nomes e valores
  // foreach ($_POST as $key => $value) {
  //   echo "Nome da variável: " . $key . ", Valor: " . $value . "<br>";
  // }

  // exit;

  // Verifique se o campo de arquivo foi enviado e se não há erros
  if (isset($_FILES['featured-image']) && $_FILES['featured-image']['error'] === UPLOAD_ERR_OK) {

    // echo $_FILES['featured-image']['name'];

    // exit;

    // TOTAL DE POSTS
    $sql_count_posts = "SELECT COUNT(*) AS total_posts FROM posts";
    $result_count_posts = $conn->query($sql_count_posts);

    if ($result_count_posts) {
      $row = $result_count_posts->fetch_assoc();
      $total_posts = $row["total_posts"];
    } else {
      echo "Erro ao contar posts: " . $conn->error;
    }

    $targetDir = "../../assets/img/posts/destaques/";
    $fileName = ($total_posts + 1) . "_" . $_FILES['featured-image']['name'];
    $targetPath = $targetDir . $fileName;

    if (!move_uploaded_file($_FILES['featured-image']['tmp_name'], $targetPath)) {
      echo "Erro ao mover arquivo.";
      exit;
    }
  } else {
    echo "Erro ao fazer upload do arquivo.";
    exit;
  }


  // Prepara a declaração SQL com um placeholder para o conteúdo
  $sql = "INSERT INTO posts (`author_id`, `category_id`, `image_cover`, `title`, `content`, `visibility`, `url_page`, `title_page`, `meta_description`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  // Prepara a declaração SQL
  $stmt = $conn->prepare($sql);

  // Verifica se a preparação da declaração foi bem-sucedida
  if ($stmt) {
    // Liga os parâmetros à declaração
    $stmt->bind_param("iisssisss", $author, $category, $image_cover, $title, $content, $visibility, $url_page, $title_page, $meta_description);

    // Obtém os valores dos parâmetros do $_POST
    $author = $_POST["userId"];
    $image_cover = ($total_posts + 1) . "_" . $_POST["image-file-name"];
    $title = $_POST["title"];
    $category = $_POST["category"];
    $visibility = $_POST["visibility"];
    $url_page = $_POST["url_page"];
    $title_page = $_POST["title_page"];
    $meta_description = $_POST["meta_description"];
    $content = $_POST["editorContent"]; // Não precisa escapar, pois prepared statements cuida disso

    // Executa a declaração
    if ($stmt->execute()) {
      $postID = $conn->insert_id;
      include "../../../generateStaticPost.php";
      header("Location: ../../../../posts.php?status=PostSuccess");
      exit;
    } else {
      echo "Erro ao salvar a postagem: " . $stmt->error;
    }

    // Fecha a declaração
    $stmt->close();
  } else {
    echo "Erro ao preparar a declaração SQL: " . $conn->error;
  }
} else {
  echo "Erro ao selecionar informações da postagem";
}

$conn->close();
