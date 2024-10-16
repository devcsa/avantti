<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description"
    content="Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto, visualizando diversos projetos dentro de um único local. " />

  <title>Seu aliado na gestão da inovação | Blog Avantt.i</title>

  <!-- Favicon -->
  <link href="./app/assets/img/favicon.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->

  <link href="./app/assets/js/vendor/animate/animate.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./app/assets/css/vendor/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="./app/assets/css/css.css" rel="stylesheet" />

  <script src="./app/assets/js/email.js"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <script type="text/javascript">
    (function() {
      emailjs.init("M5tc3I8aObv3dh3Cd");
    })();
  </script>
</head>

<body>

  <?php
  include './app/Models/blog/blogModel.php';
  ?>

  <style>
    .two-lines {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>

  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <!-- Spinner End -->

  <header>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
      <nav id="menumobile" class="navbar navbar-expand-lg navbar-dark px-4 py-3 py-lg-0">
        <div class="d-flex justify-content-center" id="logo-header">
          <a href="/index"><img id="imglogo" src="./app/assets/img/logos/logo-clara.png" class="logo" alt="Logo" /></a>
          <div class="link-blog"><a class="blog-link" href="blog">/Blog</a></div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="/index" class="nav-item nav-link">Ir para o site</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categorias</a>
              <div class="dropdown-menu m-0">
                <?php
                while ($row_category = $result_categories->fetch_assoc()) {
                  echo '<a href="./blog?categoryID=' . $row_category["id"] . '" class="dropdown-item">' . $row_category["name"] . '</a>';
                }
                ?>
              </div>
            </div>
          </div>

          <div class="nav-item nav-link">
            <div class="nav-search">
              <input id="nav-search" type="text" class="form-control" placeholder="Buscar no blog..." />
              <button id="btn-search" class="btn btn-primary px-3"><i class="bi bi-search"></i></button>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <div class="container-fluid bg-primary py-5 bg-header-conheca">
        <div class="row py-5">
          <div class="text-center p-3 titulo-mobile mt-5">
            <h6 class="display-index text-white text-uppercase animated zoomIn" data-wow-delay="0.2s">
              Conheça nosso <span class="text-primary">Blog </span>
            </h6>
            <br />
            <p class="animated zoomIn text-white" data-wow-delay="0.6s"
              style="font-family: Montserrat; font-weight: 500">
              E fique por dentro dos nossos estudos e<br>materiais relevantes para seu negócio.
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Blog Start -->
  <div class="container-fluid py-5 wow fadeInUp mb-1" data-wow-delay="0.1s">
    <input id="search-post" type="hidden" value="<?php echo $search_post; ?>">
    <div class="container py-5 mb-3">
      <div class="row g-5">
        <!-- Blog list Start -->
        <div class="col-lg-8">
          <div class="row g-5">
            <?php

            $meses = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
            $dias_semana = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");

            while ($row_posts = $result_posts->fetch_assoc()) {

              $post_Id = $row_posts["id"] . "<br>";

              $updated_at = new DateTime($row_posts["updated_at"]);
              $formatted_date = $updated_at->format("d ") . $meses[$updated_at->format("n") - 1] . $updated_at->format(", Y");

              $title = $row_posts["title"];
              $short_title = strlen($title) > 72 ? substr($title, 0, 72) . '...' : $title;

              $content = $row_posts["content"];
              $short_content = strip_tags($content); // Remover as tags HTML para contar apenas texto
              $short_content = strlen($short_content) > 150 ? substr($short_content, 0, 150) . '...' : $short_content;

              echo '<div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">';
              echo '<div class="blog-item bg-light rounded overflow-hidden">';
              echo '<div class="blog-img position-relative overflow-hidden">';
              echo '<img class="img-fluid" src="./app/assets/img/posts/destaques/' . $row_posts["image_cover"] . '" alt="Postagem" />';
              echo '<a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="./posts/' . $row_posts["url_page"] . '">' . $row_posts["category_name"] . '</a>';
              echo '</div>';
              echo '<div class="p-3 detail-blog">';
              echo '<div class="d-flex mb-3">';
              echo '<small class="me-3"><i class="far fa-user text-primary me-2"></i>' . $row_posts["author_name"] . '</small>';
              echo '<small><i class="far fa-calendar-alt text-primary me-2"></i>' . $formatted_date . '</small>';
              echo '</div>';
              echo '<h4 class="mb-3 post-title">' . $short_title . '</h4>';
              echo '<p class="two-lines">' . $short_content . '</p><a class="text-uppercase" href="./posts/' . $row_posts["url_page"] . '">Ler mais <i class="bi bi-arrow-right"></i></a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            ?>
          </div>
        </div>
        <!-- Blog list End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4">

          <!-- Category Start -->
          <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
              <h3 class="mb-0 blog-title">Categorias</h3>
            </div>
            <div class="link-animated d-flex flex-column justify-content-start">
              <?php
              $result_categories->data_seek(0);

              while ($row_category = $result_categories->fetch_assoc()) {
                echo '<a href="./blog?categoryID=' . $row_category["id"] . '" class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2"><i class="bi bi-arrow-right me-2"></i>' . $row_category["name"] . '</a>';
              }
              ?>
            </div>
          </div>
          <!-- Category End -->

          <!-- Recent Post Start -->
          <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
              <h3 class="mb-0 blog-title">Postagens Recentes</h3>
            </div>

            <?php
            while ($row_recents_posts = $result_recents_posts->fetch_assoc()) {
              echo '<div class="d-flex rounded bg-light overflow-hidden mb-3">';
              echo '<img class="img-fluid" src="./app/assets/img/posts/destaques/' . $row_recents_posts["image_cover"] . '" style="width: 100px; height: 100px; object-fit: cover" alt="Posts Recentes" />';
              echo '<a href="./posts/' . $row_recents_posts["url_page"] . '" class="blog-recents fw-semi-bold d-flex align-items-center px-3 mb-0">' . $row_recents_posts["title"] . '</a>';
              echo '</div>';
            }
            ?>
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
              <img src="./app/assets/img/labi.gif" alt="Gif Animado" class="img-fluid rounded" />
            </div>
            <!-- Image End -->

            <!-- Tags Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
              <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0 blog-title">Tags</h3>
              </div>
              <div class="d-flex flex-wrap m-n1">
                <?php
                while ($row = $result->fetch_assoc()) {
                  echo '<a href="" class="btn btn-light m-1">' . $row["tag_name"] . '</a>';
                }
                ?>
              </div>
            </div>
            <!-- Tags End -->

          </div>
          <!-- Sidebar End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Blog End -->




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

  <!-- Modal de Aviso -->
  <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-message-label">Aviso</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
          <p id="modal-message-text"></p>
        </div>
        <div class="modal-footer">
          <button id="btn-dismiss" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
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
            <span><input type="email" name="email" id="newsletter" placeholder="E-mail" autocomplete="email" /><button
                onclick="sendNewsletter()" type="submit">Assinar</button></span>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="footer-links">
        <h4 class="mb-1">Sobre Nós</h4>
        <ul>
          <li><i class="fas fa-chevron-right me-2"></i> <a href="/about">Nossa História</a>
          </li>
        </ul>
      </div>

      <div class="footer-links">
        <h4 class="mb-1">Por que escolher a Avantt.i</h4>
        <ul>
          <li><i class="fas fa-chevron-right me-2"></i> <a href="/conheca#diferenciais">Nossos diferenciais de
              mercado </a></li>
        </ul>
      </div>

      <div class="footer-links">
        <h4 class="mb-1">Mais</h4>
        <ul>
          <li><i class="fas fa-chevron-right me-2"></i> <a href="/more">Como funciona o
              Avantt.i </a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="logo-footer">
        <a href="https://avanttinovacao.com.br/" target="_blank"><img src="./app/assets/img/logos/logo-clara-st.png"
            class="logo" alt="Logo" /></a>
      </div>
      <div class="social-links">
        <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/avantti-inovacao/"
          target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
        <a class="btn btn-primary btn-square" href="https://avanttinovacao.com.br/" target="_blank"><i
            class="fas fa-globe fa-sm"></i></a>
      </div>
    </div>
  </footer>

  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-back-to-top rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="./app/assets/js/vendor/jquery.min.js"></script>
  <script src="./app/assets/js/vendor/popper.min.js"></script>
  <script src="./app/assets/js/vendor/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./app/assets/js/vendor/wow/wow.min.js"></script>
  <script src="./app/assets/js/vendor/easing/easing.min.js"></script>
  <script src="./app/assets/js/vendor/waypoints/waypoints.min.js"></script>

  <!-- Template Javascript -->
  <script src="./app/assets/js/main.js"></script>

  <script>
    let search_input = document.getElementById("nav-search")
    let btn_search = document.getElementById("btn-search")

    btn_search.addEventListener("click", () => {
      if (search_input.value.trim() != "") {
        window.location.href = `./blog?search=${search_input.value}`

      }
    })
  </script>

  <script>
    let search_post = document.getElementById("search-post")
    let modal = document.getElementById("modal-message")

    let modalMsg = document.getElementById("modal-message-text")

    let message_search = "Nenhuma postagem encontrada!"

    if (search_post.value == "none") {
      modalMsg.textContent = message_search
      $("#modal-message").modal("show");
    }
  </script>

  <script>
    var url = window.location.href;
    var cleanUrl = url.split("?")[0];
    window.history.replaceState({}, document.title, cleanUrl);
  </script>


</body>

</html>