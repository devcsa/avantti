<?php

include "./core/check_session.php";

include "./app/Models/categories/addCategory.php";

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

  <script src="./app/assets/js/vendor/jquery.min.js"></script>
  <script src="./app/assets/js/vendor/inputmask/jquery.inputmask.min.js"></script>

</head>

<body>

  <?php include './app/Views/navbar.php'; ?>

  <!-- Header -->
  <header id="main-header" class="main-header py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-gear" aria-hidden="true"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- Actions -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container col-md-10">
      <div class="row">
        <div class="col-md-3">
          <a href="./addPost" class="btn btn-primary btn-block"> <i class="fa fa-plus" aria-hidden="true"></i>
            Adicionar Postagem </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal"> <i
              class="fa fa-plus" aria-hidden="true"></i> Adicionar Categoria </a>
        </div>
        <div class="col-md-3">
          <a href="#" id="btnAddUser" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Usuário </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Posts -->
  <section id="posts" class="mb-5">
    <div class="container col-md-10">
      <div class="row col-md-12">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <h4>Últimas Postagens</h4>
            </div>
          </div>
          <?php
          include "./app/Models/posts/postsModel.php";
          ?>
        </div>
        <div class="total-dash col-md-2">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h1 class="display-4"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $total_posts; ?></h1>
              <a href="posts" class="btn btn-outline-light btn-sm mt-2">Ver</a>
            </div>
          </div>
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categorias</h3>
              <h1 class="display-4"><i class="fa fa-folder-open-o" aria-hidden="true"></i>
                <?php echo $total_categories; ?></h1>
              <a href="categories" class="btn btn-outline-light btn-sm mt-2">Ver</a>
            </div>
          </div>
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Usuários</h3>
              <h1 class="display-4"><i class="fa fa-users" aria-hidden="true"></i> <?php echo $total_users; ?></h1>
              <a href="users" class="btn btn-outline-light btn-sm mt-2">Ver</a>
            </div>
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

  <!-- Add Category Modal -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Adicionar Categoria</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <!-- <form id="addCategoryForm" action="./app/Models/categories/AddCategory.php?origem=../../home.php?addCategory" method="post"> -->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
              <label for="name-category">Categoria</label>
              <input type="text" class="form-control" name="name-category" id="name-category" />
              <span class="msg-error"><?php echo $category_err; ?></span>
            </div>
            <div class="modal-footer mt-4">
              <button class="btn btn-seconday" data-dismiss="modal">Fechar</button>
              <button type="submit" id="saveCategoryButton" class="btn btn-success">Salvar</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php
  include "./app/Models/users/ListDetailUser.php";
  ?>

  <!-- Add User Modal -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Adicionar Usuário</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body ml-3 mr-3">
          <form id="addUserForm" class="row g-3" action="./app/Models/users/AddUser.php?origem=../../home.php?addUser"
            method="post">
            <div class="col-md-6">
              <label for="name">Nome</label>
              <input type="text" class="form-control mb-3" name="name" id="name" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="email">E-mail</label>
              <input type="email" class="form-control mb-3" name="email" id="email" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="phone">Telefone</label>
              <input type="text" class="form-control mb-3" name="phone" id="phone" />
            </div>

            <div class="col-md-6">
              <label class="form-label" for="password">Senha</label>
              <input type="password" class="form-control mb-3" name="password" id="password" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="status_user">Status</label>
              <select class="form-control" name="status_user" id="status_user">
                <?php
                echo "<option value=''></option>";
                while ($row = $result_status_user->fetch_assoc()) {
                  echo '<option value="' . $row["id"] . '">' . $row["status"] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="type_user">Perfil</label>
              <select class="form-control" name="type_user" id="type_user">
                <?php
                echo "<option value=''></option>";
                while ($row = $result_type_user->fetch_assoc()) {
                  echo '<option value="' . $row["id"] . '">' . $row["type"] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="modal-footer mt-4 col-md-12">
              <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" id="saveUserButton" class="btn btn-warning">Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


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


  <script src="./app/assets/js/vendor/popper.min.js"></script>
  <script src="./app/assets/js/vendor/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> -->

  <script src="./app/assets/js/script.js"></script>
  <script src="./app/assets/js/home.js"></script>
  <!-- <script>
    CKEDITOR.replace("editor1");
  </script> -->

  <script>
    $(document).ready(function() {
      $("#phone").inputmask("(99) 99999-9999", {
        clearMaskOnLostFocus: false,
      });
    });
  </script>

  <script>
    <?php


    if (isset($_GET['status'])) {

      $url = urldecode($_GET['status']);
      $cleanUrl = htmlspecialchars($url);

      echo "sendModalStatus('$cleanUrl')";

      // $Message = $_GET['status'];
      // echo "sendModalStatus('$Message');";
    }
    // echo 'var url = window.location.href;';
    // echo 'var cleanUrl = url.split("?")[0];';
    // echo 'window.history.replaceState({}, document.title, cleanUrl);';
    ?>
  </script>

</body>

</html>