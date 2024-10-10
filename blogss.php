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

  <!-- Google tag (gtag.js) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-9HXDNPPDZJ"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-9HXDNPPDZJ');
  </script> -->



  <!-- Google Tag Manager -->
  <!-- <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js"
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-5H9VSQWL");
  </script> -->
  <!-- End Google Tag Manager -->


  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto, visualizando diversos projetos dentro de um único local. " />

  <title>Avantt.i - Seu aliado na gestão da inovação</title>

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
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H9VSQWL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <!-- Spinner End -->

  <header>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <div id="logo-header">
          <a href="index"><img id="imglogo" src="./img/logo-clara.png" class="logo" alt="Logo" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index" class="nav-item nav-link">Home</a>
            <a href="conheca" class="nav-item nav-link">Como funciona</a>
            <a href="services" class="nav-item nav-link">Serviços</a>
            <a href="price" class="nav-item nav-link">Planos</a>
            <a href="clients" class="nav-item nav-link">Clientes</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Conteúdo</a>
              <div class="dropdown-menu m-0">
                <a href="materiais" class="dropdown-item">Materiais</a>
                <a href="./blog/blog" class="dropdown-item active">Blog</a>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-primary py-2 px-3 ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">Teste
            a Avantt.i</a>
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
            <p class="animated zoomIn text-white" data-wow-delay="0.6s" style="font-family: Montserrat; font-weight: 500">
              E fique por dentro dos nossos estudos e<br>materiais relevantes para seu negócio.
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Blog Start -->
  <div class="container-fluid py-5 wow fadeInUp mb-1" data-wow-delay="0.1s">
    <div class="container py-5 mb-3">
      <div class="row g-5">
        <!-- Blog list Start -->
        <div class="col-lg-8">
          <div class="row g-5">
            <!-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog1.png" alt="Inovação" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://diagnosticodeinovacao.com.br/mapa-da-inovacao-corporativa/" target="_blank">Mapa da
                    Inovação</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Inventta & AEVO</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>2023</small>
                  </div>
                  <h4 class="mb-3 post-title">Diagnóstico de Inovação</h4>
                  <p>Quer saber qual o nível de maturidade em que a sua empresa está? Faça o teste gratuito</p>
                  <a class="text-uppercase" href="https://diagnosticodeinovacao.com.br/mapa-da-inovacao-corporativa/" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div> -->
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog2.png" alt="Inovação" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://inventta.net/se-todos-sao-a-favor-da-inovacao-por-que-ela-nao-acontece/" target="_blank">Estratégia de Inovação</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Inventta</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>06 Out, 2023</small>
                  </div>
                  <h4 class="mb-3 post-title">Se todos são a favor da inovação, por que ela não acontece?</h4>
                  <p>Que todos são a favor da inovação, não há dúvidas. Qual executivo ousaria se manifestar...</p>
                  <a class="text-uppercase" href="https://inventta.net/se-todos-sao-a-favor-da-inovacao-por-que-ela-nao-acontece/" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog3.png" alt="Inovação" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://inventta.net/um-novo-jeito-de-decidir-sobre-projetos-de-inovacao/" target="_blank">Cultura de Inovação</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Vinícius Scarpa</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>30 Ago, 2023</small>
                  </div>
                  <h4 class="mb-3 post-title">Um novo jeito de decidir sobre projetos de inovação.</h4>
                  <p>O desafio passado pela liderança para projetos de inovação é muito claro e as expectativas
                    sempre...
                  </p>
                  <a class="text-uppercase" href="https://inventta.net/um-novo-jeito-de-decidir-sobre-projetos-de-inovacao/">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog4.png" alt="Inovação" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://inventta.net/conheca-o-labi-o-seu-aliado-na-gestao-da-inovacao/" target="_blank">Cultura de Inovação</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Inventta</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>05 Dez, 2023</small>
                  </div>
                  <h4 class="mb-3 post-title">Conheça o Labi, o seu aliado na gestão da inovação.</h4>
                  <p>Já se perguntou como anda a inovação na sua empresa? De fato, sabemos que boa parte...</p>
                  <a class="text-uppercase" href="https://inventta.net/conheca-o-labi-o-seu-aliado-na-gestao-da-inovacao/" target="_blank">Ler
                    mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog5.png" alt="Inovação" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://inventta.net/os-desafios-da-inovacao-disruptiva/" target="_blank">Cultura de
                    Inovação</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Henrique Monteiro</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>28 Jul, 2023</small>
                  </div>
                  <h4 class="mb-3 post-title">Os desafios da inovação disruptiva.</h4>
                  <p>Produtos e serviços disruptivos são lançados em um ritmo cada vez maior; por isso, é muito...</p>
                  <a class="text-uppercase" href="" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog6.png" alt="Inovação" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://inventta.net/como-criar-um-ambiente-propicio-a-inovacao/" target="_blank">Cultura de
                    Inovação</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Vinícius Scarpa</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>12 Jan, 2023</small>
                  </div>
                  <h4 class="mb-3 post-title">Como criar um ambiente propício à inovação?</h4>
                  <p>A dinâmica de como a inovação se dá dentro de uma organização já é estudada há muitos anos e...</p>
                  <a class="text-uppercase" href="https://inventta.net/como-criar-um-ambiente-propicio-a-inovacao/" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog5.png" alt="" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="" target="_blank">Web Design</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                  </div>
                  <h4 class="mb-3 post-title">How to build a website</h4>
                  <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                  <a class="text-uppercase" href="" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog5.png" alt="" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="" target="_blank">Web Design</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                  </div>
                  <h4 class="mb-3 post-title">How to build a website</h4>
                  <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                  <a class="text-uppercase" href="" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog5.png" alt="" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="" target="_blank">Web Design</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                  </div>
                  <h4 class="mb-3 post-title">How to build a website</h4>
                  <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                  <a class="text-uppercase" href="" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
              <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                  <img class="img-fluid" src="./assets/img/blog/blog5.png" alt="" />
                  <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="" target="_blank">Web Design</a>
                </div>
                <div class="p-3 detail-blog">
                  <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                  </div>
                  <h4 class="mb-3 post-title">How to build a website</h4>
                  <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                  <a class="text-uppercase" href="" target="_blank">Ler mais <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div> -->

            <!-- Início Paginação -->
            <!-- <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
              <nav aria-label="Page navigation">
                <ul class="pagination pagination-lg m-0">
                  <li class="page-item disabled">
                    <a class="page-link rounded-0" href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link rounded-0" href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
            <!-- Fim Paginação -->
          </div>
        </div>
        <!-- Blog list End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <!-- Search Form Start -->
          <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="input-group">
              <input type="text" class="form-control p-3" placeholder="Buscar" />
              <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
            </div>
          </div>
          <!-- Search Form End -->

          <!-- Category Start -->
          <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
              <h3 class="mb-0 blog-title">Categorias</h3>
            </div>
            <div class="link-animated d-flex flex-column justify-content-start">
              <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Cultura de Inovação</a>
              <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Estratégia de Inovação</a>
              <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Gestão da Inovação</a>
              <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Design Thinking</a>
              <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Inovação Aberta</a>
            </div>
          </div>
          <!-- Category End -->

          <!-- Recent Post Start -->
          <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
              <h3 class="mb-0 blog-title">Postagens Recentes</h3>
            </div>
            <div class="d-flex rounded overflow-hidden mb-3">
              <img class="img-fluid" src="./assets/img/blog/blog5.png" style="width: 100px; height: 100px; object-fit: cover" alt="Inovação" />
              <a href="https://inventta.net/os-desafios-da-inovacao-disruptiva/" target="_blank" class="blog-recents fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Os desafios da inovação
                disruptiva.</a>
            </div>
            <div class="d-flex rounded overflow-hidden mb-3">
              <img class="img-fluid" src="./assets/img/blog/blog6.png" style="width: 100px; height: 100px; object-fit: cover" alt="Inovação" />
              <a href="https://inventta.net/como-criar-um-ambiente-propicio-a-inovacao/" target="_blank" class="blog-recents fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Como criar um ambiente
                propício à inovação?</a>
            </div>
            <!-- <div class="d-flex rounded overflow-hidden mb-3">
              <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover" alt="" />
              <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet
                adipis elit </a>
            </div>
            <div class="d-flex rounded overflow-hidden mb-3">
              <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover" alt="" />
              <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet
                adipis elit </a>
            </div>
            <div class="d-flex rounded overflow-hidden mb-3">
              <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover" alt="" />
              <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet
                adipis elit </a>
            </div>
            <div class="d-flex rounded overflow-hidden mb-3">
              <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover" alt="" />
              <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet
                adipis elit </a>
            </div>
          </div> -->
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
              <img src="img/labi.gif" alt="Gif Animado" class="img-fluid rounded" />
            </div>
            <!-- Image End -->

            <!-- Tags Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
              <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0 blog-title">Tags</h3>
              </div>
              <div class="d-flex flex-wrap m-n1">
                <a href="" class="btn btn-light m-1">Inovação</a>
                <a href="" class="btn btn-light m-1">Estratégia</a>
                <a href="" class="btn btn-light m-1">Projetos</a>
                <a href="" class="btn btn-light m-1">SEO</a>
                <a href="" class="btn btn-light m-1">Marketing</a>
                <a href="" class="btn btn-light m-1">Gestão</a>
              </div>
            </div>
            <!-- Tags End -->

            <!-- Plain Text Start -->
            <!-- <div class="wow slideInUp" data-wow-delay="0.1s">
              <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0">Plain Text</h3>
              </div>
              <div class="bg-light text-center" style="padding: 30px">
                <p>
                  Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo,
                  diam accusam no sea ut tempor magna takimata, amet sit et diam dolor
                  ipsum amet diam
                </p>
                <a href="" class="btn btn-primary py-2 px-4">Ler mais</a>
              </div>
            </div> -->
            <!-- Plain Text End -->
          </div>
          <!-- Sidebar End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Blog End -->


  <!-- Modal E-mail Start -->
  <div class="modal fade" id="emailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(9, 30, 62, 0.8)">
        <div class="modal-header border-0">
          <h5 class="modal-title text-white" id="title-email">Quero conhecer a Avantt.i</h5>
          <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
          <div class="col-md-12">
            <form action="./send_mail.php?email_origem=index.php" method="post">
              <span class="row g-3 px-2">
                <div class="col-md-12">
                  <label for="e-mail" class="form-label">E-mail</label>
                  <input type="email" class="form-control textoemail" placeholder="Seu e-mail" name="e-mail" id="e-mail" required />
                </div>
                <div class="col-md-12">
                  <label class="form-label" for="message">Mensagem</label>
                  <textarea name="message" class="form-control textoemail" id="message" cols="30" rows="5" required></textarea>
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


  <!-- Modal Message-->
  <div class="modal fade" id="mensagem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            <span><input type="email" name="email" id="newsletter" placeholder="E-mail" /><button onclick="sendNewsletter()" type="submit">Assinar</button></span>
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
          <li><i class="fas fa-chevron-right me-2"></i> <a href="conheca.php#diferenciais">Nossos diferenciais de
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
        <a href="https://www.avanttinovacao.com.br/" target="_blank"><img src="./img/logo-clara-st.png" class="logo" alt="Logo" /></a>
      </div>
      <div class="social-links">
        <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/avantti-inovacao/" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
        <a class="btn btn-primary btn-square" href="https://www.avanttinovacao.com.br/" target="_blank"><i class="fas fa-globe fa-sm"></i></a>
      </div>
    </div>
  </footer>

  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-back-to-top rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

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


</body>

</html>