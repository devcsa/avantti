<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5H9VSQWL');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description"
    content="Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto, visualizando diversos projetos dentro de um único local. " />

  <title>Materiais e frames | Avantt.i</title>

  <!-- Favicon -->
  <link href="./img/favicon.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" /> -->

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->

  <link href="lib/animate/animate.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->

  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->

  <link href="css/style.css" rel="stylesheet" />

  <script src="./js/email.js"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <script type="text/javascript">
    (function() {
      emailjs.init("M5tc3I8aObv3dh3Cd");
    })();
  </script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H9VSQWL" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript> -->
  <!-- End Google Tag Manager (noscript) -->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H9VSQWL" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <!-- Spinner End -->

  <header>

    <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <!-- navbar.js -->
      </nav>

      <div class="container-fluid bg-primary py-5 bg-header-materiais mb-5">
        <div class="row py-5">
          <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h6 class="display-index text-white animated zoomIn text-uppercase mb-4">Materiais e Frames de <span
                style="color: #ce8ff3">inovação</span></h6>
            <p id="pricing" class="h5 text-white" style="font-size: 22px; font-family: Montserrat; font-weight: 500">
              Para impulsionar sua experiência com Avantt.i</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ======= Materiais Start ======= -->
  <section id="materiais" class="materiais p-5 mb-6 border-bottom">
    <div class="container d-flex flex-column justify-content-center pt-2 mb-6">
      <div class="section-title title-ajuda text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 800px">
        <h4 class="fw-bold text-primary">Ferramentas de inovação</h4>
      </div>
      <div class="d-flex text-center mb-5 justify-content-center title-ajuda">
        <p class="text-dark" style="max-width: 850px">Aprenda a identificar oportunidades, desenvolver e avaliar a
          viabilidade de ideias e a implementar soluções</p>
      </div>

      <div class="materiais-container">
        <div class="material">
          <div class="materiais-download" onclick="userCheck('material-1')">
            <img src="./assets/img/materiais1.png" alt="Materiais Download" />
          </div>
          <div id="material-1" class="btnbaixar user-off"></div>
        </div>

        <div class="material">
          <div class="materiais-download" onclick="userCheck('material-2')">
            <img src="./assets/img/materiais2.png" alt="Materiais Download" />
          </div>
          <div id="material-2" class="btnbaixar user-off"></div>
        </div>

        <div class="material">
          <div class="materiais-download" onclick="userCheck('material-3')">
            <img src="./assets/img/materiais3.png" alt="Materiais Download" />
          </div>
          <div id="material-3" class="btnbaixar user-off"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Materiais End -->

  <!-- ======= Videos Start ======= -->
  <section id="videos" class="materiais p-5 mb-4 mt-5 mb-5">
    <div class="container d-flex flex-column justify-content-center pt-2 mt-4 mb-6">
      <div class="section-title text-center position-relative pb-1 mb-5 mx-auto" style="max-width: 700px">
        <h4 class="fw-bold text-primary">Vídeos de modelos de negócios e transformação digital</h4>
      </div>

      <div class="materiais-container">
        <div class="materiais-box">
          <div class="materiais-videos"
            onclick="executeVideo('video-1', './assets/movies/Aula 1 - BR - 1 - completo.mp4')">
            <video id="video-1" poster="./assets/img/card1.png"></video>
          </div>
        </div>

        <div class="materiais-box">
          <div class="materiais-videos"
            onclick="executeVideo('video-2', './assets/movies/Aula 1 - BR - 2 (Rolls Royce, Bosch Basf-Bayer).mp4')">
            <video id="video-2" poster="./assets/img/card2.png"></video>
          </div>
        </div>

        <div class="materiais-box">
          <div class="materiais-videos" onclick="executeVideo('video-3', './assets/movies/Aula 1 - DDI - 2.mp4')">
            <video id="video-3" poster="./assets/img/card3.png"></video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Videos End -->


  <!-- Modal E-mail Start -->
  <div class="modal fade" id="emailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(9, 30, 62, 0.8)">
        <div class="modal-header border-0">
          <h5 class="modal-title text-white" id="title-email">Quero conhecer a Avantt.i</h5>
          <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
          <div class="col-md-12">
            <form action="./send_mail.php?email_origem=materiais.php" method="post">
              <span class="row g-3 px-2">
                <div class="col-md-12">
                  <label for="e-mail" class="form-label">E-mail</label>
                  <input type="email" class="form-control textoemail" placeholder="Seu e-mail" name="e-mail" id="e-mail"
                    required />
                </div>
                <div class="col-md-12">
                  <label class="form-label" for="message">Mensagem</label>
                  <textarea name="message" class="form-control textoemail" id="message" cols="30" rows="5"
                    required></textarea>
                </div>
                <div class="text-center mt-3 mb-2">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function openModalEmail() {
      $("#emailModal").modal("show");

      let texto_email = document.getElementById("message");
      texto_email.value = "Olá! Acessei a página da Avantt.i e quero agendar uma call para conhecer mais. \n\nObrigada!";
    }
  </script>
  <!-- Modal E-mail End -->



  <!-- Modal Solicitar Acesso Start -->
  <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(9, 30, 62, 0.8)">
        <div class="modal-header border-0">
          <h5 class="modal-title text-white" id="title">Quero despertar a inovação com a Avantt.i</h5>
          <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
          <div class="input-group" style="max-width: 600px">
            <span class="row g-3 px-2">
              <div class="col-md-12 mt-2">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" name="name" class="form-control" id="name" required />
              </div>
              <div class="col-md-12">
                <label for="email" class="form-label">E-mail * <span style="font-size: 12px; margin-left: 5px;">(Somente
                    enviamos para
                    e-mail corporativo)</span></label>
                <input type="email" class="form-control" name="email" id="email" required />
              </div>
              <div class="col-md-12">
                <label for="empresa" class="form-label">Empresa *</label>
                <input type="text" class="form-control" name="empesa" id="empresa" required />
              </div>
              <div class="col-md-6">
                <label for="colaboradores" class="form-label">Nr. Colaboradores *</label>
                <select id="colaboradores" class="form-select" required>
                  <option selected></option>
                  <option value="1 a 50">1 a 50</option>
                  <option value="51 a 200">51 a 200</option>
                  <option value="201 a 1.000">201 a 1.000</option>
                  <option value="1.001 a 5.000">1.001 a 5.000</option>
                  <option value="Mais de 5.001">Mais de 5.001</option>
                </select>
              </div>
              <!-- <div class="col-md-6">
                <label for="versao" class="form-label">Versão de Acesso *</label>
                <select id="versao" class="form-select" required>
                  <option selected></option>
                  <option value="Acesso único por 4h">Acesso único por 4h</option>
                  <option value="Acesso Trial 15 dias">Acesso Trial 15 dias</option>
                </select>
              </div> -->

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="news" />
                  <label class="form-check-label" for="news">Concordo em receber novidades.</label>
                </div>
              </div>

              <br />
              <small>
                <p class="text-white">Em conformidade com a lei nº 13.709/18, ou LGPD.</p>
              </small>

              <div class="text-center mb-3">
                <button type="submit" class="btn btn-primary" onclick="sendMail()">Quero receber o acesso ao
                  Avantt.i</button>
              </div>

              <!-- <small>
                <p class="text-white mb-0">*Liberado em até 24h</p>
                <p class="text-white mb-0">**Acesso somente liberados para emails corporativos.</p>
              </small> -->
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Solicitar Acesso End -->

  <!-- Modal Login / Register Start -->
  <div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content-login">
        <div class="header-login border-0">
          <button type="button" class="btn bg-white btn-close-login" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-login-header">
          <h6 class="modal-title-login text-white" id="title-signin">Realize o login para fazer o download de nossos
            materiais</h6>
          <h6 class="modal-title-login text-white d-none" id="title-signup">Realize seu cadastro para fazer o download
            de nossos materiais</h6>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
          <div class="d-flex justify-content-center align-items-center input-group" style="max-width: 600px">
            <span class="row g-3">
              <div id="name-signup" class="col-md-12 d-none">
                <label for="name-login" class="form-label">Nome</label>
                <input type="text" name="name-login" class="form-control" id="name-login" required />
              </div>
              <div class="col-md-12">
                <label for="email-login" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email-login" placeholder="E-mail" id="email-login"
                  required />
                <div class="error" id="email-required-error">Email é obrigatório</div>
                <div class="error" id="email-invalid-error">Email é inválido</div>
              </div>
              <div id="empresa-signup" class="col-md-12 d-none">
                <label for="empresa-login" class="form-label">Empresa</label>
                <input type="text" class="form-control" name="empresa-login" placeholder="Empresa" id="empresa-login"
                  required />
              </div>
              <div class="col-md-12">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Senha" id="password" required />
                <div class="error" id="password-required-error">Senha é obrigatória</div>
              </div>

              <div id="confirmar-senha" class="col-md-12 d-none">
                <label for="confirmPassword" class="form-label">Confirmar senha</label>
                <input type="password" class="form-control" name="confirmPassword" placeholder="Confirmar senha"
                  id="confirmPassword" required />
                <div class="error" id="password-doesnt-match-error">Confirmação de Senha Incorreta!</div>
              </div>

              <div class="text-center mb-3">
                <button type="button" class="btn btn-primary btn-fixoP mt-3" id="login-button"
                  onclick="login()">Entrar</button>
                <button type="button" class="btn btn-tertiary btn-fixoP mt-3 d-none" id="signup-button"
                  onclick="register()">Cadastrar</button>
              </div>

              <small>
                <div id="btnsignup" class="signup-link fw-bold text-white">Não tem cadastro? <span id="sign-up"
                    href="#">Registrar</span></div>
                <div id="btnsignin" class="signin-link fw-bold text-white d-none">Já tem cadastro? <span
                    id="sign-in">Login</span></div>
              </small>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Login / Register End -->

  <!-- Modal Message-->
  <div class="modal fade" id="mensagem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div id="tipoMsg" class="modal-header">
          <h5 id="tipoCap" class="modal-title"></h5>
          <button type="button" class="btn-close btn_X" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div id="textoMsg" style="color: #000" class="modal-body"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn_OK" data-bs-dismiss="modal"></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h3 class="mb-4">Assine Nossa Newsletter</h3>
            <span><input type="email" name="email" id="newsletter" placeholder="E-mail" /><button
                onclick="sendNewsletter()" type="submit">Assinar</button></span>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="footer-links">
        <h4 class="mb-1">Sobre Nós</h4>
        <ul>
          <li><i class="fas fa-chevron-right me-2"></i> <a href="about">Nossa História</a></li>
        </ul>
      </div>

      <div class="footer-links">
        <h4 class="mb-1">Por que escolher a Avantt.i</h4>
        <ul>
          <li><i class="fas fa-chevron-right me-2"></i> <a href="conheca#diferenciais">Nossos diferenciais de
              mercado </a></li>
        </ul>
      </div>

      <div class="footer-links">
        <h4 class="mb-1">Mais</h4>
        <ul>
          <li><i class="fas fa-chevron-right me-2"></i> <a href="more">Como funciona a Avantt.i </a></li>
        </ul>
      </div>

      <div class="footer-links">
        <h4 class="mb-1">Contato</h4>
        <ul>
          <li>
            <i class="fas fa-chevron-right me-2"></i>
            <a href="#" onclick="openModalEmail()">Fale Conosco</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="logo-footer">
        <a href="https://www.avanttinovacao.com.br/" target="_blank"><img src="./img/logo-clara-st.png" class="logo"
            alt="Logo Avantti" /></a>
      </div>
      <div class="social-links">
        <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/avantti-inovacao/"
          target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
        <a class="btn btn-primary btn-square" href="https://www.avanttinovacao.com.br/" target="_blank"><i
            class="fas fa-globe fa-sm"></i></a>
      </div>
    </div>
  </footer>

  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-back-to-top rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->

  <script src="https://www.gstatic.com/firebasejs/10.0.0/firebase-app-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.0.0/firebase-auth-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.0.0/firebase-firestore-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.0.0/firebase-storage-compat.js"></script>

  <script src="./js/firbase-init.js"></script>

  <script src="./js/login.js"></script>
  <script src="./js/register.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <script src="lib/wow/wow.min.js"></script>

  <!-- Template Javascript -->
  <script src="./js/navbar.js"></script>
  <script src="./js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"
    integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<?php
if (isset($_GET['email_status'])) {
  $emailStatus = $_GET['email_status'];

  // Verifica o status e define as mensagens e classes conforme necessário
  $modalTitle = ($emailStatus === 'success') ? 'Sucesso' : 'Erro';
  $modalMessage = ($emailStatus === 'success') ? 'E-mail enviado com sucesso!' : 'Erro ao enviar o e-mail';
  $modalClass = ($emailStatus === 'success') ? 'modal-success' : 'modal-danger';

  echo '<script>';
  echo 'document.addEventListener("DOMContentLoaded", function() {';
  echo 'var modal = document.createElement("div");';
  echo 'modal.className = "modal fade ' . $modalClass . '" ;';
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
  echo '<button id="btnEmailX" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
  echo '</div>';
  echo '<div class="modal-body">';
  echo '<p>' . $modalMessage . '</p>';
  echo '</div>';
  echo '<div class="modal-footer">';
  echo '<button id="btnEmail" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
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
?>

</html>