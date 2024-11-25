<?php

session_id("admBlog");
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
} else {
  header("location: home");
  exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <meta name="title" content="Blog da Avantti | Insights e Dicas de Gestão da Inovação">
  <meta name="description" content="Acesse o Blog da Avantti e fique por dentro das tendências, insights e dicas sobre gestão da inovação. Transforme ideias em projetos inovadores para sua empresa.">
  <meta name="keywords" content="Blog sobre gestão da inovação, Dicas de inovação empresarial, Insights para inovação corporativa, Tendências em gestão de inovação, Conteúdos sobre inovação organizacional">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Portuguese">
  <meta name="revisit-after" content="10 days">
  <meta name="author" content="Avantti">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="Sumário">
  <meta name="twitter:site" content="@avantti">
  <meta name="twitter:title" content="Blog da Avantti | Insights e Dicas de Gestão da Inovação">
  <meta name="twitter:description" content="Acesse o Blog da Avantti e fique por dentro das tendências, insights e dicas sobre gestão da inovação. Transforme ideias em projetos inovadores para sua empresa.">
  <meta name="twitter:creator" content="@avantti">
  <!-- Imagem Twitter Summary Card, tem que ter pelo menos 120x120px -->
  <meta name="twitter:image" content="https://www.avantti.csahost.com.br/assets/img/Banner%20Open%20Graph%20Avantti.png">

  <!-- Open Graph data -->
  <meta property="og:title" content="Blog da Avantti | Insights e Dicas de Gestão da Inovação" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://www.avantti.csahost.com.br" />
  <meta property="og:image" content="https://www.avantti.csahost.com.br/assets/img/Banner%20Open%20Graph%20Avantti.png" />
  <meta property="og:description" content="Acesse o Blog da Avantti e fique por dentro das tendências, insights e dicas sobre gestão da inovação. Transforme ideias em projetos inovadores para sua empresa." /> 
  <meta property="og:site_name" content="Avantti" />
  <meta property="fb:admins" content="" />

  <title>Blog da Avantti | Insights e Dicas de Gestão da Inovação</title>

  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

  <!-- Favicons -->
  <link href="./app/assets/img/favicon.png" rel="icon" />

  <link href="./app/assets/css/vendor/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />


  <!-- Template Main CSS File -->
  <link href="./app/assets/css/style.css" rel="stylesheet" />
  <link href="./app/assets/css/index.css" rel="stylesheet" />


</head>

<body>
  <div class="page-container">
    <div class="form-container">
      <div id="login-form" class="auth-form active">
        <div class="logo-login">
          <a href="https://www.avanttinovacao.com.br" target="_blank"><img src="./app/assets/img/logos/logo-clara.png" alt="Logo" class="logo" /></a>
        </div>
        <div class="auth-form__header">
          <h1>Bem vindo!</h1>
        </div>
        <form action="./app/Models/login.php" method="post">
          <div class="form-group">
            <label for="email-login">E-mail</label>
            <input type="email" name="email-login" placeholder="E-mail" id="email-login" aria-label="Email address" required />
            <span id="login-email-error" class="error-msg"></span>
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Senha" id="password" aria-label="Password" />
            <span id="login-password-error" class="error-msg"></span>
          </div>
          <div class="centralize">
            <a href="#" class="forgot-password" id="recover-password">Esqueceu sua senha?</a>
          </div>
          <div class="auth-form__footer">
            <button type="submit" class="btn btn-fixo mt-3" id="login-button">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script src="./app/assets/js/script.js"></script>


  <?php
  include "./app/Controllers/statusController.php";
  ?>

</body>

</html>