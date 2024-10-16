<?php

include "./core/connection.php";  // Conexão com o banco de dados

// Defina o ID do post que você deseja gerar a página estática
$postID = 39;

// Filtrar Post
$sql_post_view = "SELECT posts.*, categories.name AS category_name, users.username AS author_name
                  FROM posts
                  INNER JOIN categories ON posts.category_id = categories.id
                  INNER JOIN users ON posts.author_id = users.id WHERE posts.id = $postID";

$result_post_view = $conn->query($sql_post_view);

if ($result_post_view->num_rows > 0) {
  $row_post_view = $result_post_view->fetch_assoc();

  // Montar as datas de criação e atualização
  $meses = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
  $created_at = new DateTime($row_post_view["created_at"]);
  $updated_at = new DateTime($row_post_view["updated_at"]);
  $created_date = $created_at->format("d ") . $meses[$created_at->format("n") - 1] . $created_at->format(", Y");
  $updated_date = $updated_at->format("d ") . $meses[$updated_at->format("n") - 1] . $updated_at->format(", Y");

  // Variáveis do post
  $image_cover = "../app/assets/img/posts/destaques/" . $row_post_view["image_cover"];
  $author_name = $row_post_view["author_name"];
  $title = $row_post_view["title"];
  $content = $row_post_view["content"];
  $category = $row_post_view["category_name"];

  // Gerar o HTML da página
  $html = "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset='utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <meta name='description' content='Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto.' />
  <title>$title - Avantt.i</title>

  <!-- Favicon -->
  <link href='../app/assets/img/favicon.png' rel='icon' />

  <!-- Google Web Fonts -->
  <link href='https://fonts.googleapis.com' rel='preconnect' />
  <link href='https://fonts.gstatic.com' rel='preconnect' crossorigin />

  <!-- Icon Font Stylesheet -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet' />
  <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' rel='stylesheet' />

  <!-- Libraries Stylesheet -->
  <link href='../app/assets/js/vendor/animate/animate.min.css' rel='stylesheet' />

  <!-- Customized Bootstrap Stylesheet -->
  <link href='../app/assets/css/vendor/bootstrap.min.css' rel='stylesheet' />

  <!-- Template Stylesheet -->
  <link href='../app/assets/css/css.css' rel='stylesheet' />
</head>
<body>
  <header>
    <div class='container-fluid position-relative p-0'>
      <nav id='navbar-blog' class='navbar navbar-expand-lg navbar-dark px-4 py-3 py-lg-0'></nav>

      <div class='container-fluid bg-primary py-3 bg-blog-post'>
        <div class='row py-4'>
          <div class='titulo-mobile mt-6 pt-3 title-blog'>
            <h1 class='main-title animated zoomIn mb-4'>$title</h1>
            <div class='d-flex mb-2 detail-post'>
              <small><i class='far fa-user me-2'></i><a href='./blog?authorID={$row_post_view['author_id']}'>$author_name</a> | <a href='./blog?categoryID={$row_post_view['category_id']}'>$category</a></small>
            </div>
            <div class='d-flex detail-post'>
              <small><i class='far fa-calendar-alt me-2'></i>$created_date | Atualizado em $updated_date</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class='container-fluid py-5'>
    <div class='container py-5 mb-3'>
      <div class='row g-5'>
        <div class='col-lg-8'>
          <div class='img-destaque position-relative overflow-hidden'>
            <img class='img-fluid' src='$image_cover' alt='Imagem Destaque' />
          </div>
          <div class='content-blog position-relative overflow-hidden'>
            $content
          </div>
        </div>

        <!-- Sidebar Start -->
        <div class='col-lg-4'>
          <!-- Category Start -->
          <div class='mb-5 wow slideInUp' data-wow-delay='0.1s'>
            <div class='section-title section-title-sm position-relative pb-3 mb-4'>
              <h3 class='mb-0 blog-title'>Categorias</h3>
            </div>
            <div class='link-animated d-flex flex-column justify-content-start'>";

  $sql_categories = "SELECT id, name FROM categories";
  $result_categories = $conn->query($sql_categories);
  if ($result_categories->num_rows > 0) {
    while ($row_category = $result_categories->fetch_assoc()) {
      $html .= "<a href='./blog?categoryID=" . $row_category['id'] . "' class='h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2'><i class='bi bi-arrow-right me-2'></i>" . $row_category['name'] . "</a>";
    }
  }

  $html .= "
            </div>
          </div>
          <!-- Category End -->

          <!-- Recent Post Start -->
          <div class='mb-5 wow slideInUp' data-wow-delay='0.1s'>
            <div class='section-title section-title-sm position-relative pb-3 mb-4'>
              <h3 class='mb-0 blog-title'>Postagens Recentes</h3>
            </div>";

  $sql_recent_posts = "SELECT id, title, image_cover FROM posts ORDER BY created_at DESC LIMIT 5";
  $result_recent_posts = $conn->query($sql_recent_posts);
  if ($result_recent_posts->num_rows > 0) {
    while ($row_recent_post = $result_recent_posts->fetch_assoc()) {
      $html .= "
              <div class='d-flex rounded overflow-hidden mb-3'>
                <img class='img-fluid' src='../app/assets/img/posts/destaques/" . $row_recent_post['image_cover'] . "' style='width: 100px; height: 100px; object-fit: cover' alt='Posts Recentes' />
                <a href='./viewPost?postID=" . $row_recent_post['id'] . "' class='blog-recents fw-semi-bold d-flex align-items-center bg-light px-3 mb-0'>" . $row_recent_post['title'] . "</a>
              </div>";
    }
  }

  $html .= "
          </div>
          <!-- Recent Post End -->

          <!-- Image Start -->
          <div class='mb-5 wow slideInUp' data-wow-delay='0.1s'>
            <img src='../app/assets/img/labi.gif' alt='Gif Animado' class='img-fluid rounded' />
          </div>
          <!-- Image End -->

          <!-- Tags Start -->
          <div class='mb-5 wow slideInUp' data-wow-delay='0.1s'>
            <div class='section-title section-title-sm position-relative pb-3 mb-4'>
              <h3 class='mb-0 blog-title'>Tags</h3>
            </div>
            <div class='d-flex flex-wrap m-n1'>";

  $sql_tags = "SELECT tag_name FROM tags";
  $result_tags = $conn->query($sql_tags);
  if ($result_tags->num_rows > 0) {
    while ($row_tag = $result_tags->fetch_assoc()) {
      $html .= "<a href='#' class='btn btn-light m-1'>" . $row_tag['tag_name'] . "</a>";
    }
  }

  $html .= "
            </div>
          </div>
          <!-- Tags End -->
        </div>
        <!-- Sidebar End -->
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <footer id='footer'>
    <div class='footer-newsletter'>
      <div class='container'>
        <div class='row justify-content-center'>
          <div class='col-lg-6'>
            <h3 class='mb-4'>Assine Nossa Newsletter</h3>
            <span><input type='email' name='email' id='newsletter' placeholder='E-mail' autocomplete='email' /><button
                onclick='sendNewsletter()' type='submit'>Assinar</button></span>
          </div>
        </div>
      </div>
    </div>

    <div class='footer-top'>
      <div class='footer-links'>
        <h4 class='mb-1'>Sobre Nós</h4>
        <ul>
          <li><i class='fas fa-chevron-right me-2'></i> <a href='/about'>Nossa História</a></li>
        </ul>
      </div>

      <div class='footer-links'>
        <h4 class='mb-1'>Por que escolher a Avantt.i</h4>
        <ul>
          <li><i class='fas fa-chevron-right me-2'></i> <a href='/conheca#diferenciais'>Nossos diferenciais de
              mercado </a></li>
        </ul>
      </div>

      <div class='footer-links'>
        <h4 class='mb-1'>Mais</h4>
        <ul>
          <li><i class='fas fa-chevron-right me-2'></i> <a href='/more'>Como funciona a Avantt.i </a></li>
        </ul>
      </div>

    </div>

    <div class='footer-bottom'>
      <div class='logo-footer'>
        <a href='https://avanttinovacao.com.br/' target='_blank'><img src='../app/assets/img/logos/logo-clara-st.png'
            class='logo' alt='Logo' /></a>
      </div>
      <div class='social-links'>
        <a class='btn btn-primary btn-square me-2' href='https://www.linkedin.com/company/avantti-inovacao/'
          target='_blank'><i class='fab fa-linkedin-in fw-normal'></i></a>
        <a class='btn btn-primary btn-square' href='https://avanttinovacao.com.br/' target='_blank'><i
            class='fas fa-globe fa-sm'></i></a>
      </div>
    </div>
  </footer>

  <!-- Footer End -->

  <!-- Back to Top -->
  <a href='#' class='btn btn-lg btn-back-to-top rounded back-to-top'><i class='bi bi-arrow-up'></i></a>

  <!-- JavaScript Libraries -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js'></script>
  <script src='../app/assets/js/vendor/wow/wow.min.js'></script>
  <script src='../app/assets/js/vendor/easing/easing.min.js'></script>
  <script src='../app/assets/js/vendor/waypoints/waypoints.min.js'></script>

  <!-- Template Javascript -->
  <script src='../app/assets/js/main.js'></script>

  <script src='../app/assets/js/navbar-blog.js'></script>

</body>
</html>";

  // Defina o caminho onde o arquivo será salvo
  $file_path = "./posts/post_" . $postID . ".php";

  // Salve o conteúdo HTML em um arquivo
  file_put_contents($file_path, $html);

  echo "Página salva com sucesso: <a href='$file_path'>$file_path</a>";
} else {
  echo "Postagem não encontrada!";
}

$conn->close();
