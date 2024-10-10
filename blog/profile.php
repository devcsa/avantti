<?php

include "./core/check_session.php";

include "./app/Models/users/editUser.php";

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./app/assets/js/vendor/inputmask/jquery.inputmask.min.js"></script>
</head>

<body>

  <?php include './app/Views/navbar.php'; ?>

  <!-- Header -->
  <header id="main-header" class="main-header py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i> Perfil do Usuário</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- Actions -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-1 mr-auto">
          <a href="home" class="btn btn-light btn-block"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
            Voltar</a>
        </div>

      </div>
    </div>
  </section>
  <!-- Profile Edit -->
  <section id="profile" style="min-height: 600px;" class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Editar Cadastro</h4>
            </div>
          </div>
          <div class="card-body">
            <form class="row" action="./app/Models/users/editUser.php/" method="post" onsubmit="enableDisabledFields()">

              <input type="hidden" id="password" name="password" value=<?php echo $password; ?> />
              <input type="hidden" id="userId" name="userId" value=<?php echo $userId; ?> />

              <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="Email" id="email" name="email" class="form-control" value=<?php echo $email; ?> />
              </div>
              <div class="form-group col-md-4">
                <label for="phone">Telefone</label>
                <input type="text" id="phone" name="phone" class="form-control" value=<?php echo $phone; ?> />
              </div>
              <div class="form-group col-md-4">
                <label for="status_user">Status</label>
                <select id="status_user" name="status_user" class="form-control">
                  <?php
                  while ($row_statusUser = $result_statusUser->fetch_assoc()) {
                    $selected = ($row_statusUser['id'] == $row['status_user_id']) ? 'selected' : '';
                    echo '<option value="' . $row_statusUser["id"] . '" ' . $selected . '>' . $row_statusUser["status"] . '</option>';
                  }
                  ?>
                </select>

              </div>
              <div class="form-group col-md-4">
                <label for="email">Perfil</label>
                <select id="type_user" class="form-control" name="type_user">
                  <?php
                  while ($row_typeUser = $result_typeUser->fetch_assoc()) {
                    $selected = ($row_typeUser['id'] == $row['type_user_id']) ? 'selected' : '';
                    echo '<option value="' . $row_typeUser["id"] . '" ' . $selected . '>' . $row_typeUser["type"] . '</option>';
                  }
                  ?>
                </select>

              </div>
              <div class="post-actions col-md-12 row">
                <div class="d-flex col-md-3">
                  <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#passwordModal"> <i class="mr-1 fa fa-lock" aria-hidden="true"></i> Alterar senha
                  </button>
                </div>
                <div class="d-flex col-md-3">
                  <button type="submit" class="btn btn-success btn-block"> <i class="mr-1 fa fa-save" aria-hidden="true"></i>
                    Salvar</button>
                </div>
              </div>

            </form>
            <input type="hidden" id="editMessage" valeue="<?php echo $msgStatus; ?>" />
          </div>
        </div>
        <div class="col-md-3">

          <form action="./app/helper/upload.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="photoUserId" name="photoUserId" value=<?php echo $userId; ?> />
            <img id="image-display" src="<?php echo $userphoto; ?>" alt="User Photo" class="image-display d-block img-fluid mb-3" />
            <div class="urlPhoto">
              <input type="text" id="photoURL" />
            </div>
            <div class="row justify-content-center">
              <input type="file" name="fileToUpload" accept=".png, .jpg, .bmp" id="fileToUpload">
              <span id="btnEditPhoto" class="btn btn-primary col-md-2 mr-1" title="Alterar Foto"> <i class="fa fa-edit" aria-hidden="true"></i></span>
              <span id="btnDeletePhoto" class="btn btn-danger col-md-2 mr-1" title="Excluir Foto"> <i class="fa fa-remove" aria-hidden="true"></i></span>

              <button type="submit" id="btnSavePhoto" class="btn btn-success col-md-2" title="Salvar Foto"> <i class="fa fa-save" aria-hidden="true"></i></button>
          </form>

        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <div class="footer-bottom">
    <div class="logo-footer">
      <a href="https://www.avanttinovacao.com.br/" target="_blank"><img src="./app/assets/img/logos/logo-clara-st.png" class="logo" alt="Logo Avantti" /></a>
    </div>
  </div>
  </footer>

  <!-- Password Modal -->
  <div class="modal fade" id="passwordModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Alterar Senha</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="new-password">Nova Senha</label>
              <input id="new-password" type="new-password" class="form-control" />
            </div>
            <div class="form-group">
              <label for="confirm-password">Confirmar Senha</label>
              <input type="password" id="confirm-password" class="form-control" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-seconday" data-dismiss="modal">Fechar</button>
          <button class="btn btn-primary" data-dismiss="modal">Salvar</button>
        </div>
      </div>
    </div>
  </div>

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
          <button id="btn-dismiss" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="confirm-delete" type="button" class="btn btn-danger">Excluir</button>
        </div>
      </div>
    </div>
  </div>


  <script src="./app/assets/js/vendor/popper.min.js"></script>
  <script src="./app/assets/js/vendor/bootstrap.min.js"></script>

  <script src="./app/assets/js/editUser.js"></script>
  <script src="./app/assets/js/script.js"></script>

  <script>
    $(document).ready(function() {
      $("#phone").inputmask("(99) 99999-9999", {
        clearMaskOnLostFocus: false,
      });
    });

    const typeUserId = document.getElementById("typeUserId").value
      .trim(); // Use trim() para remover espaços em branco extras
    const inputTypeUser = document.getElementById("type_user");
    const inputStatusUser = document.getElementById("status_user");


    if (typeUserId !== "1") {
      inputTypeUser.setAttribute("disabled", "disabled");
      inputStatusUser.setAttribute("disabled", "disabled");
    }
  </script>


</body>

</html>