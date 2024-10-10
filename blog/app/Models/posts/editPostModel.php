<?php

include "../../../core/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $post_id = $_POST['post_id'];

  $new_photo = false;


  // Loop através de todas as variáveis $_POST e exiba seus nomes e valores
  // foreach ($_POST as $key => $value) {
  //   echo "Nome da variável: " . $key . ", Valor: " . $value . "<br>";
  // }

  // exit;

  // Verifique se o campo de arquivo foi enviado e se não há erros
  if (isset($_FILES['featured-image']) && $_FILES['featured-image']['error'] === UPLOAD_ERR_OK) {
    // Obtenha o ID da postagem que está sendo atualizada
    // $post_id = $_POST['post_id'];

    $new_photo = true;

    // echo "alterou " .  $_FILES['featured-image']['name'];

    // exit;

    // Obtenha o nome do arquivo atual da imagem em destaque
    $sql_get_image = "SELECT image_cover FROM posts WHERE id = ?";
    $stmt_get_image = $conn->prepare($sql_get_image);
    $stmt_get_image->bind_param("i", $post_id);
    $stmt_get_image->execute();
    $stmt_get_image->bind_result($current_image);
    $stmt_get_image->fetch();
    $stmt_get_image->close();

    // Delete a imagem atual se existir
    if ($current_image) {
      unlink("../../assets/img/posts/destaques/" . $current_image);
    }

    // exit;

    // Mova a nova imagem enviada para o diretório de destino
    $targetDir = "../../assets/img/posts/destaques/";
    $fileName = $post_id . "_" . $_FILES['featured-image']['name'];
    $targetPath = $targetDir . $fileName;

    if (!move_uploaded_file($_FILES['featured-image']['tmp_name'], $targetPath)) {
      echo "Erro ao mover arquivo.";
      exit;
    }
  }

  if ($new_photo == false) {
    $fileName = $_POST['image-file-name'];
  }


  // Prepara a declaração SQL para atualizar a postagem
  $sql = "UPDATE posts SET `author_id` = ?, `category_id` = ?, `image_cover` = ?, `title` = ?, `content` = ?, `visibility` = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);

  // Verifica se a preparação da declaração foi bem-sucedida
  if ($stmt) {
    // Liga os parâmetros à declaração
    $stmt->bind_param("iisssii", $author, $category, $image_cover, $title, $content, $visibility, $post_id);

    // Obtém os valores dos parâmetros do $_POST
    $author = $_POST["userId"];
    $title = $_POST["title"];
    $category = $_POST["category"];
    $visibility = $_POST["visibility"];
    $content = $_POST["editorContent"];
    $image_cover = $fileName;

    // echo $author;
    // echo  $title;
    // echo  $category;
    // echo $visibility;
    // echo $content;
    // echo $image_cover;
    // exit;


    // Executa a declaração
    if ($stmt->execute()) {
      header("Location: ../../../../posts.php?status=PostUpdated");
      exit;
    } else {
      echo "Erro ao atualizar a postagem: " . $stmt->error;
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