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


  <?php include './app/Views/navbar.php'; ?>


  <!-- Header -->
  <header id="main-header" class="main-header py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-pencil" aria-hidden="true"></i> Postagens</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- Actions -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Procurar" />
            <span class="input-group-btn">
              <button class="btn btn-primary">Procurar</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main>
    <!-- Posts -->
    <section id="posts" style="min-height: 700px;" class="mb-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h4>Lista de Postagens</h4>
              </div>
            </div>
            <?php
            include "./app/Models/posts/postsModel.php";
            ?>
            <!-- <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav> -->
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal de Aviso -->
  <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message-label" aria-hidden="true">
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
      <a href="https://www.avanttinovacao.com.br/" target="_blank"><img src="./app/assets/img/logos/logo-clara-st.png" class="logo" alt="Logo Avantti" /></a>
    </div>
  </div>

  <script src="./app/assets/js/vendor/jquery.min.js"></script>
  <script src="./app/assets/js/vendor/popper.min.js"></script>
  <script src="./app/assets/js/vendor/bootstrap.min.js"></script>
  <script src="./app/assets/js/script.js"></script>
  <script src="./app/assets/js/postsAction.js"></script>

</body>

</html>