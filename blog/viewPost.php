<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description"
    content="Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto, visualizando diversos projetos dentro de um único local. " />

  <title>Avantt.i - Seu aliado na gestão da inovação</title>

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

      <?php
      include './app/Models/blog/viewPostModel.php';
      ?>

      <div class="container-fluid bg-primary py-3 bg-blog-post">
        <div class="row py-4">
          <div class="titulo-mobile mt-6 pt-3 title-blog">
            <h1 class="main-title animated zoomIn mb-4" data-wow-delay="0.2s"><?php echo $title ?></h1>
            <div class="d-flex mb-2 detail-post">
              <small class="me-3"><i class="far fa-user me-2"></i><a class=""
                  href="./blog?authorID=<?php echo $authorID ?>"><?php echo $author_name ?></a> |
                <a class="" href="./blog?categoryID=<?php echo $categoryID ?>"><?php echo $category ?></a></small>
            </div>
            <div class="d-flex detail-post">
              <small><i class="far fa-calendar-alt me-2"></i><?php echo $created_date ?> | Atualizado em
                <?php echo $updated_date ?></small>
            </div>
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
            <div class="img-destaque position-relative overflow-hidden">
              <img class="img-fluid" src="<?php echo $image_cover ?>" alt="Imagem Destaque" />
            </div>
            <div class="content-blog position-relative overflow-hidden">
              <?php echo $content ?>
            </div>
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
              echo '<div class="d-flex rounded overflow-hidden mb-3">';
              echo '<img class="img-fluid" src="./app/assets/img/posts/destaques/' . $row_recents_posts["image_cover"] . '" style="width: 100px; height: 100px; object-fit: cover" alt="Posts Recentes" />';
              echo '<a href="./viewPost?postID=' . $row_recents_posts["id"] . '" class="blog-recents fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">' . $row_recents_posts["title"] . '</a>';
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
          <li><i class="fas fa-chevron-right me-2"></i> <a href="/about">Nossa História</a></li>
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
          <li><i class="fas fa-chevron-right me-2"></i> <a href="/more">Como funciona a Avantt.i </a></li>
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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