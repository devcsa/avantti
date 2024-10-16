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

  ?>

  <!-- Header -->
  <header id="main-header" class="main-header py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h1>Adicionar Postagem</h1>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- Posts -->
    <section id="posts" class="mb-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
            </div>
            <div class="card-body">
              <form id="addPostForm" action="./app/Models/posts/addPostModel.php/" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="userId" id="userId" />
                <input type="hidden" name="actionPost" id="actionPost" value="addPost" />
                <div class="row">
                  <div class="form-group col-md-7">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" />
                  </div>
                  <div class="form-group col-md-3">
                    <label for="category">Categoria</label>
                    <?php

                    include "./app/Models/categories/categoryList.php";

                    ?>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="font-weight-bold mb-1" for="visibility">Status</label>
                    <select class="form-control" name="visibility" id="visibility">
                      <option value="1">Rascunho</option>
                      <option value="2">Publicado</option>
                      <option value="3">Destaque</option>
                      <option value="4">Arquivado</option>
                    </select>
                  </div>

                </div>

                <div class="form-group">
                  <label class="font-weight-bold col" for="featured-image">Imagem destaque <small>(850 x
                      350)</small></label>
                  <input type="file" id="featured-image" name="featured-image" accept="image/*" />
                  <div>
                    <img id="image-view" src="./app/assets/img/posts/sizes/destaque.jpg" alt="Featured Image"
                      class="image-post-display img-fluid mb-2" />
                  </div>
                  <div class="urlImage">
                    <input type="hidden" id="image-file-name" name="image-file-name">
                    <input type="text" id="urlImage" />
                  </div>
                  <span id="btnEditImage" class="btn btn-primary btn-featured-image ml-1 mr-1" title="Inserir imagem">
                    <i class="fa fa-search" aria-hidden="true"></i></span>
                  <span id="btnViewImage" class="btn btn-secondary btn-featured-image mr-1" title="Visualizar imagem">
                    <i id="iconViewImage" class="fa fa-eye" aria-hidden="true"></i></span>
                  <span id="btnRemoveImage" class="btn btn-danger btn-featured-image" title="Remover imagem"> <i
                      class="fa fa-trash-o fa-lg" aria-hidden="true"></i></span>

                </div>
                <div class="form-group">
                  <label for="content">Conteúdo</label>
                  <textarea id="content" name="editorContent"></textarea>
                </div>

                <div class="modal-footer">
                  <a href="./home.php" class="btn btn-seconday">Fechar</a>
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
  </main>


  <!-- Footer -->
  <div class="footer-bottom">
    <div class="logo-footer">
      <a href="https://avanttinovacao.com.br/" target="_blank"><img src="./app/assets/img/logos/logo-clara-st.png"
          class="logo" alt="Logo Avantti" /></a>
    </div>
  </div>


  <script src="./app/assets/js/vendor/jquery.min.js"></script>
  <script src="./app/assets/js/vendor/popper.min.js"></script>
  <script src="./app/assets/js/vendor/bootstrap.min.js"></script>
  <script src="./app/assets/js/vendor/tinymce.min.js"></script>
  <script src="./app/assets/js/script.js"></script>
  <script src="./app/assets/js/post.js"></script>
  <script src="./app/assets/js/posts/url_posts.js"></script>



</body>

</html>