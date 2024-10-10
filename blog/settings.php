<?php

include "./core/check_session.php";
include "./core/check_access_type.php";

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
          <h1><i class="fa fa-gear"></i> Configurações</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- Actions -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-1 mr-auto">
          <a href="home.php" class="btn btn-light btn-block"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
            Voltar</a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block"> <i class="fa fa-check" aria-hidden="true"></i> Salvar
            Alterações </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Settings -->
  <section id="settings" class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Editar Configurações</h4>
            </div>
          </div>
          <div class="card-body">
            <form>
              <fieldset class="form-group">
                <legend>Permite Cadastro de Usuários</legend>
                <div class="form-check">
                  <label class="form-check-label"> <input type="radio" class="form-check-input" value="yes" checked />
                    Sim </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label"> <input type="radio" class="form-check-input" value="no" /> Não
                  </label>
                </div>
              </fieldset>
              <fieldset class="form-group">
                <legend>Formatar Home</legend>
                <div class="form-check">
                  <label class="form-check-label"> <input type="radio" class="form-check-input" value="posts" checked />
                    Post Index </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label"> <input type="radio" class="form-check-input" value="page" /> Single
                    Page </label>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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
  <script src="./app/assets/js/script.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace("editor1");
  </script>
</body>

</html>