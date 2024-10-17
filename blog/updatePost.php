<?php

include "./core/check_session.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Avantt.i - Blog Admin Area</title>

  <link rel="shortcut icon" href="./app/assets/img/favicon.png" type="image/png" />

  <link rel="stylesheet" href="./app/assets/css/vendor/font-awesome.min.css" />
  <link rel="stylesheet" href="./app/assets/css/vendor/bootstrap.css" />
  <link rel="stylesheet" href="./app/assets/css/style.css" />

</head>

<body>

  <?php include './app/Views/navbar.php';


  include "./app/Models/posts/postDetail.php";

  ?>

  <!-- Header -->
  <header id="main-header" class="main-header py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h1>Editar Postagem</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- Posts -->
  <section id="posts" class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
          </div>
          <div class="card-body">
            <form id="addPostForm" action="./app/Models/posts/editPostModel.php/" method="post"
              enctype="multipart/form-data">
              <input type="hidden" name="userId" id="userId" />
              <input type="hidden" id="post_id" name="post_id" value=<?php echo $post_id; ?> />
              <input type="hidden" name="actionPost" id="actionPost" value="editPost" />
              <div class="row">
                <div class="form-group col-md-7">
                  <label for="title">Título</label>
                  <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" />
                </div>
                <div class="form-group col-md-3">
                  <label for="category">Categoria</label>
                  <select class="form-control" id="category" name="category">
                    <?php
                    while ($row_category = $result_categories->fetch_assoc()) {
                      $selected = ($row_category['id'] == $row['category_id']) ? 'selected' : '';
                      echo '<option value="' . $row_category["id"] . '" ' . $selected . '>' . $row_category["name"] . '</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="visibility">Status</label>
                  <select class="form-control" name="visibility" id="visibility">
                    <option value="1" <?php if ($visibility == "Rascunho") echo 'selected'; ?>>Rascunho</option>
                    <option value="2" <?php if ($visibility == "Publicado") echo 'selected'; ?>>Publicado</option>
                    <option value="3" <?php if ($visibility == "Destaque") echo 'selected'; ?>>Destaque</option>
                    <option value="4" <?php if ($visibility == "Arquivado") echo 'selected'; ?>>Arquivado</option>
                  </select>
                </div>

              </div>

              <div class="row">
                <div class="form-group col-md-5-5">
                  <label for="title_page">Meta-título</label>
                  <input type="text" class="form-control" id="title_page" name="title_page" maxlength="60"
                    value="<?php echo $title_page; ?>" />
                </div>
                <div class="form-group col-md-5-5">
                  <label for="url_page">URL página</label>
                  <input type="text" class="form-control" id="url_page" name="url_page" maxlength="60"
                    value="<?php echo $url_page; ?>" />
                </div>
                <div class="add-url-page">
                  <span title="Sugerir URL" onclick="generateUrlPost()">
                    <i class="fa fa-link" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="form-group col-md-12">
                  <label for="meta_description">Meta-descrição</label>
                  <textarea id="meta_description" class="meta-description"
                    name="meta_description"><?php echo $meta_description; ?></textarea>
                </div>

              </div>

              <div class="form-group">
                <label class="font-weight-bold col" for="featured-image">Imagem destaque <small>(850 x
                    350)</small></label>
                <input type="file" id="featured-image" name="featured-image" accept="image/*" />
                <img id="image-view" src="<?php echo $image_cover; ?>" alt="Featured Image"
                  class="image-post-display img-fluid mb-2" />
                <div class="urlImage">
                  <input type="hidden" id="image-file-name" name="image-file-name"
                    value="<?php echo $image_fileName; ?>">
                  <input type="text" id="urlImage" />
                </div>
                <span id="btnEditImage" class="btn btn-primary btn-featured-image ml-1 mr-1" title="Inserir imagem"> <i
                    class="fa fa-search" aria-hidden="true"></i></span>
                <span id="btnViewImage" class="btn btn-secondary btn-featured-image mr-1" title="Visualizar imagem"> <i
                    id="iconViewImage" class="fa fa-eye" aria-hidden="true"></i></span>
                <span id="btnRemoveImage" class="btn btn-danger btn-featured-image" title="Remover imagem"> <i
                    class="fa fa-trash-o fa-lg" aria-hidden="true"></i></span>

              </div>
              <div class="form-group">
                <label for="editorContent">Conteúdo</label>
                <textarea id="content" name="editorContent"><?php echo $content; ?></textarea>
              </div>

              <div class="modal-footer">
                <a href="./home" class="btn btn-seconday">Fechar</a>
                <!-- <button class="btn btn-seconday">Fechar</button> -->
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Modal de Aviso -->
  <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-message-label">Aviso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="modal-message-text"></p>
        </div>
        <div class="modal-footer">
          <button id="btn-dismiss" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button id="confirm-delete" type="button" class="btn btn-danger">Excluir</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <div class="footer-bottom">
    <div class="logo-footer">
      <a href="https://www.avanttinovacao.com.br/" target="_blank"><img src="./app/assets/img/logos/logo-clara-st.png"
          class="logo" alt="Logo Avantti" /></a>
    </div>
  </div>
  </footer>


  <script src="./app/assets/js/vendor/jquery.min.js"></script>
  <script src="./app/assets/js/vendor/popper.min.js"></script>
  <script src="./app/assets/js/vendor/bootstrap.min.js"></script>
  <script src="./app/assets/js/vendor/tinymce.min.js"></script>
  <script src="./app/assets/js/script.js"></script>
  <script src="./app/assets/js/post.js"></script>
  <script src="./app/assets/js/posts/url_posts.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor1");
  </script> -->


</body>

</html>