<?php


if (isset($_GET['status'])) {
  $getStatus = $_GET['status'];

  $modalTitle = 'Aviso';

  if ($getStatus === 'UserError') {
    $modalMessage = 'Não foi possível efetuar o cadastro!';
  } else {
    if ($getStatus === 'UserSuccess') {
      $modalMessage = 'Usuário cadastrado com sucesso!';
    } else {
      if ($getStatus === 'UserBlank') {
        $modalMessage = 'Por favor, preencha todos os campos!';
      } else {
        if ($getStatus === 'LoginError') {
          $modalMessage = 'Usuário ou senha inválidos!';
        } else {
          if ($getStatus === 'LoginNotFound') {
            $modalMessage = 'Usuário não encontrado!';
          } else {
            if ($getStatus === 'LoginBlank') {
              $modalMessage = 'Por favor, preencha todos os campos!';
            }
          }
        }
      }
    }
  }


  echo '<script>';
  echo 'document.addEventListener("DOMContentLoaded", function() {';
  echo 'var modal = document.createElement("div");';
  echo 'modal.className = "modal fade";';
  echo 'modal.setAttribute("id", "modal-message");';
  echo 'modal.setAttribute("data-bs-backdrop", "static");';
  echo 'modal.setAttribute("data-bs-keyboard", "false");';
  echo 'modal.setAttribute("role", "dialog");';
  echo 'modal.setAttribute("tabindex", "-1");';
  echo 'modal.setAttribute("aria-labelledby", "staticBackdropLabel");';
  echo 'modal.setAttribute("aria-hidden", "true");';
  echo 'modal.innerHTML = \'';
  echo '<div class="modal-dialog">';
  echo '<div class="modal-content">';
  echo '<div class="modal-header">';
  echo '<h5 class="modal-title">' . $modalTitle . '</h5>';
  echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
  echo '</div>';
  echo '<div class="modal-body">';
  echo '<p>' . $modalMessage . '</p>';
  echo '</div>';
  echo '<div class="modal-footer">';
  echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '\';';
  echo 'document.body.appendChild(modal);';
  echo 'var modalInstance = new bootstrap.Modal(modal);';
  echo 'modalInstance.show();';
  // Remove o parâmetro da URL sem recarregar a página
  echo 'var url = window.location.href;';
  echo 'var cleanUrl = url.split("?")[0];';
  echo 'window.history.replaceState({}, document.title, cleanUrl);';

  echo '});';
  echo '</script>';
}
