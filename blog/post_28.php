<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto." />
  <title>A Evolução da Gestão da Inovação - Avantt.i</title>
  <link href="./app/assets/img/favicon.png" rel="icon" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="./app/assets/css/vendor/bootstrap.min.css" rel="stylesheet" />
  <link href="./app/assets/css/css.css" rel="stylesheet" />
</head>

<body>

  <?php

  include "./core/connection.php";

  // Obter Categorias
  $sql_categories = "SELECT * FROM categories";
  $result_categories = $conn->query($sql_categories);

  if ($result_categories->num_rows < 0) {

    echo "Nenhuma categoria encontrada.";
  }
  ?>


  <header>
    <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 py-lg-0">
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
      </nav>

      <div class="container-fluid bg-primary py-3 bg-blog-post">
        <div class="row py-4">
          <div class="titulo-mobile mt-6 pt-3 title-blog">
            <h1 class="main-title animated zoomIn mb-4">A Evolução da Gestão da Inovação</h1>
            <div class="d-flex mb-2 detail-post">
              <small><i class="far fa-user me-2"></i><a href="./blog?authorID=23">Cicero Alves</a> | <a
                  href="./blog?categoryID=9">Gestão da Inovação</a></small>
            </div>
            <div class="d-flex detail-post">
              <small><i class="far fa-calendar-alt me-2"></i>30 Ago, 2024 | Atualizado em 02 Out, 2024</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid py-5">
    <div class="container py-5 mb-3">
      <div class="row g-5">
        <div class="col-lg-8">
          <div class="img-destaque position-relative overflow-hidden">
            <img class="img-fluid" src="./app/assets/img/posts/destaques/28_Imagem1.png" alt="Imagem Destaque" />
          </div>
          <div class="content-blog position-relative overflow-hidden">
            <div class="SCXW18148949 BCX8">
              <div class="OutlineElement Ltr SCXW18148949 BCX8">
                <p class="Paragraph SCXW18148949 BCX8" style="text-align: justify">
                  <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW18148949 BCX8"><span class="TextRun SCXW148329999 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW148329999 BCX8">&nbsp;
                          &nbsp; &nbsp; &nbsp;</span></span>Ao longo dos anos, a pr&aacute;tica de gerar
                      inova&ccedil;&atilde;o de maneira consciente e sistem&aacute;tica tem evolu&iacute;do
                      significativamente. Inicialmente
                      confinada a artigos acad&ecirc;micos, a gest&atilde;o da inova&ccedil;&atilde;o come&ccedil;ou a
                      ganhar destaque fora da academia no final dos anos 90, impulsionada
                      por best-sellers como "O Dilema da Inova&ccedil;&atilde;o" de Clayton Christensen, "Gest&atilde;o
                      da Inova&ccedil;&atilde;o" de Joe&nbsp;</span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW18148949 BCX8">Tidd</span><span
                      class="NormalTextRun SCXW18148949 BCX8">, "Inova&ccedil;&atilde;o Aberta" de Henry </span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW18148949 BCX8">Chesbrough</span><span
                      class="NormalTextRun SCXW18148949 BCX8"> e "A Arte da Inova&ccedil;&atilde;o" de Tom Kelley, entre
                      outros.</span></span><span class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                </p>
                <p class="Paragraph SCXW18148949 BCX8" style="text-align: justify">
                  <strong><span class="EOP SCXW18148949 BCX8" data-ccp-props="{">Teste: Imagem copiada da web e colada
                      com ctrl+v</span></strong>
                </p>
                <p class="Paragraph SCXW18148949 BCX8" style="text-align: justify"><img
                    src="https://www.kaibaratrading.com/assets/img/destaques/image5.png" width="765" height="199" /></p>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <h3 class="Paragraph SCXW18148949 BCX8">
                  <strong><span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR"
                      data-contrast="auto"><span class="NormalTextRun SCXW18148949 BCX8">Aprendizados da Gest&atilde;o
                        da Inova&ccedil;&atilde;o</span></span><span class="EOP SCXW18148949 BCX8"
                      data-ccp-props="{">&nbsp;</span></strong>
                </h3>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <p class="Paragraph SCXW18148949 BCX8">
                  <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW18148949 BCX8"><span class="TextRun SCXW148329999 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW148329999 BCX8">&nbsp;
                          &nbsp; &nbsp; &nbsp;</span></span>As organiza&ccedil;&otilde;es aprenderam ao longo do tempo
                      que inovar requer:</span></span><span class="EOP SCXW18148949 BCX8"
                    data-ccp-props="{">&nbsp;</span>
                </p>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="1"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW18148949 BCX8">Reconhecer que uma boa tecnologia com um modelo de
                          neg&oacute;cio fraco pode ser menos eficaz do que uma tecnologia mediana em um modelo de
                          neg&oacute;cio
                          robusto.</span></span><span class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="2"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW18148949 BCX8">Estruturar processos para transformar ideias de
                          diversas fontes em conceitos e projetos at&eacute; a
                          implementa&ccedil;&atilde;o.</span></span><span class="EOP SCXW18148949 BCX8"
                        data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="3"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW18148949 BCX8">Cultivar um ambiente e uma cultura que fomentem a
                          inova&ccedil;&atilde;o, complementando um bom processo de
                          inova&ccedil;&atilde;o.</span></span><span class="EOP SCXW18148949 BCX8"
                        data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="4"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW18148949 BCX8">Aproveitar conhecimento externo para acelerar e
                          otimizar esfor&ccedil;os de inova&ccedil;&atilde;o.</span></span><span
                        class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="5"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SpellingErrorV2Themed SCXW18148949 BCX8">Prototipar</span><span
                          class="NormalTextRun SCXW18148949 BCX8">
                          rapidamente solu&ccedil;&otilde;es ou produtos em desenvolvimento ao inv&eacute;s de esperar
                          por perfei&ccedil;&atilde;o antes do lan&ccedil;amento.</span></span><span
                        class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="6"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW18148949 BCX8">Desenvolver um modelo de gest&atilde;o eficiente que
                          n&atilde;o comprometa os esfor&ccedil;os de inova&ccedil;&atilde;o.</span></span><span
                        class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW18148949 BCX8" style="text-align: justify">
                <ul class="BulletListStyle1 SCXW18148949 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW18148949 BCX8" role="listitem" data-leveltext="" data-font="Symbol"
                    data-listid="30" data-list-defn-props="{" aria-setsize="-1" data-aria-posinset="7"
                    data-aria-level="1">
                    <p class="Paragraph SCXW18148949 BCX8">
                      <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW18148949 BCX8">Manter investimentos cont&iacute;nuos em
                          inova&ccedil;&atilde;o, mesmo em tempos de crise.</span></span><span
                        class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <p class="Paragraph SCXW18148949 BCX8">
                  <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW18148949 BCX8"><span class="TextRun SCXW148329999 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW148329999 BCX8">&nbsp;
                          &nbsp; &nbsp; &nbsp;</span></span>Esses aprendizados t&ecirc;m gerado valor significativo para
                      as organiza&ccedil;&otilde;es, levando-as a criar modelos pr&oacute;prios de gest&atilde;o da
                      inova&ccedil;&atilde;o alinhados com sua cultura e ambi&ccedil;&atilde;o.</span></span><span
                    class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                </p>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <h3 class="Paragraph SCXW18148949 BCX8">
                  <strong><span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR"
                      data-contrast="auto"><span class="NormalTextRun SCXW18148949 BCX8">Desafios Atuais da
                        Inova&ccedil;&atilde;o</span></span></strong><span class="EOP SCXW18148949 BCX8"
                    data-ccp-props="{">&nbsp;</span>
                </h3>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <p class="Paragraph SCXW18148949 BCX8">
                  <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW18148949 BCX8"><span class="TextRun SCXW148329999 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW148329999 BCX8">&nbsp;
                          &nbsp; &nbsp; &nbsp;</span></span>Nos &uacute;ltimos anos, houve uma
                      transforma&ccedil;&atilde;o na abordagem das organiza&ccedil;&otilde;es em rela&ccedil;&atilde;o
                      &agrave;
                      inova&ccedil;&atilde;o. Enquanto os esfor&ccedil;os tradicionais geraram valor, a
                      dissemina&ccedil;&atilde;o das tecnologias da informa&ccedil;&atilde;o eliminou
                      barreiras, intensificando a competi&ccedil;&atilde;o. Empresas com base digital emergiram como
                      l&iacute;deres globais, dominando muitas das inova&ccedil;&otilde;es
                      contempor&acirc;neas. Assim, os modelos de gest&atilde;o da inova&ccedil;&atilde;o que antes eram
                      eficazes para o core business agora se mostram insuficientes para
                      sustentar o crescimento esperado pelas organiza&ccedil;&otilde;es.</span></span><span
                    class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                </p>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <h3 class="Paragraph SCXW18148949 BCX8">
                  <strong><span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR"
                      data-contrast="auto"><span class="NormalTextRun SCXW18148949 BCX8">Inova&ccedil;&atilde;o
                        Al&eacute;m do Core Business</span></span><span class="EOP SCXW18148949 BCX8"
                      data-ccp-props="{">&nbsp;</span></strong>
                </h3>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <p class="Paragraph SCXW18148949 BCX8" style="text-align: justify">
                  <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW18148949 BCX8"><span class="TextRun SCXW148329999 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW148329999 BCX8">&nbsp;
                          &nbsp; &nbsp; &nbsp;</span></span>Atualmente, as organiza&ccedil;&otilde;es precisam explorar
                      novos horizontes de inova&ccedil;&atilde;o em neg&oacute;cios adjacentes ao seu core business para
                      alcan&ccedil;ar seus objetivos. A explora&ccedil;&atilde;o de oportunidades al&eacute;m do core
                      business &eacute; agora o objetivo principal da
                      inova&ccedil;&atilde;o.</span></span><span class="EOP SCXW18148949 BCX8"
                    data-ccp-props="{">&nbsp;</span>
                </p>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <h3 class="Paragraph SCXW18148949 BCX8">
                  <strong><span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR"
                      data-contrast="auto"><span class="NormalTextRun SCXW18148949 BCX8">Novos Modelos de Gest&atilde;o
                        da Inova&ccedil;&atilde;o</span></span></strong><span class="EOP SCXW18148949 BCX8"
                    data-ccp-props="{">&nbsp;</span>
                </h3>
              </div>
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <p class="Paragraph SCXW18148949 BCX8">
                  <span class="TextRun SCXW18148949 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW18148949 BCX8"><span class="TextRun SCXW148329999 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW148329999 BCX8">&nbsp;
                          &nbsp; &nbsp; &nbsp;</span></span>Diante desse cen&aacute;rio, h&aacute; uma crescente busca
                      por novos modelos e metodologias de gest&atilde;o da inova&ccedil;&atilde;o que permitam &agrave;s
                      organiza&ccedil;&otilde;es adaptar-se a uma abordagem renovada de cria&ccedil;&atilde;o de valor,
                      focada na gera&ccedil;&atilde;o de novos neg&oacute;cios.</span></span><span
                    class="EOP SCXW18148949 BCX8" data-ccp-props="{">&nbsp;</span>
                </p>
              </div>
            </div>
            <div class="SCXW18148949 BCX8">
              <div class="OutlineElement Ltr SCXW18148949 BCX8" style="text-align: justify">
                <h3>Sobre a Avantt.i&nbsp;</h3>
                <p>
                  <span class="TextRun SCXW195930854 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW195930854 BCX8">&nbsp; &nbsp; &nbsp; &nbsp;</span></span>A Avantt.i
                  &eacute; uma plataforma de inova&ccedil;&atilde;o desenvolvida pela Inventta, para gestores de
                  inova&ccedil;&atilde;o e gerentes de projeto.
                </p>
                <p>
                  <span class="TextRun SCXW195930854 BCX8" lang="PT-BR" xml:lang="PT-BR" data-contrast="auto"><span
                      class="NormalTextRun SCXW195930854 BCX8">&nbsp; &nbsp; &nbsp; &nbsp;</span></span>Com
                  m&oacute;dulos de intra, open e gest&atilde;o do portf&oacute;lio, oferecemos uma vis&atilde;o
                  completa da Gest&atilde;o da Inova&ccedil;&atilde;o para alavancar
                  suas iniciativas.
                </p>
                <ul>
                  <li>
                    <strong>Vis&atilde;o global e gest&atilde;o do portf&oacute;lio: </strong>Atrav&eacute;s da
                    consolida&ccedil;&atilde;o do portf&oacute;lio de inova&ccedil;&atilde;o, a
                    Avantt.i ajuda a identificar os principais projetos e avan&ccedil;ar com assertividade. Tudo em uma
                    &uacute;nica plataforma.&nbsp;
                  </li>
                  <li>
                    <strong>Programa de intra: </strong>Crie desafios e obtenha participa&ccedil;&atilde;o dos
                    colaboradores. A inova&ccedil;&atilde;o vira rotina e voc&ecirc; impulsiona
                    a cultura de inova&ccedil;&atilde;o na empresa.
                  </li>
                  <li>
                    <strong>Open Innovation:</strong> Chame startups e parceiros para desafios, gerencie parceria na
                    plataforma e tenha acesso a mais de 23.000 startups na nossa base.
                  </li>
                  <li>
                    <strong>M&eacute;tricas Acion&aacute;veis: </strong>Influencie a organiza&ccedil;&atilde;o a
                    investir em esfor&ccedil;os de inova&ccedil;&atilde;o com base em
                    m&eacute;tricas claras e acion&aacute;veis. Me&ccedil;a resultados dos projetos e comunique o
                    sucesso das iniciativas
                  </li>
                  <li>
                    <strong>Inova&ccedil;&atilde;o Integrada e Transparente: </strong>Gerencie projetos de diferentes
                    esteiras e horizontes, com colabora&ccedil;&atilde;o de parceiros e
                    equipe, visualizando o portf&oacute;lio globalmente.&nbsp;&nbsp;
                  </li>
                  <li style="text-align: left">
                    <strong>Engajamento com Conhecimento: </strong>Transforme a inova&ccedil;&atilde;o em h&aacute;bito
                    com trilhas de conhecimento e mentorias dispon&iacute;veis ao longo
                    da jornada.&nbsp;<br /><br />Conhe&ccedil;a <a
                      href="https://materiais.avanttinovacao.com.br/avantti-inovacao-primeiro-passo">aqui</a>, solicite
                    uma
                    demonstra&ccedil;&atilde;o guiada e teste gr&aacute;tis.<a
                      href="https://materiais.avanttinovacao.com.br/avantti-inovacao-primeiro-passo"><span
                        class="EOP SCXW195930854 BCX8" data-ccp-props="{"><img
                          src="https://d335luupugsy2.cloudfront.net/cms/files/808420/1720784635/$63vucuqtfj9"
                          width="673" height="448" /></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer id="footer">
    <div class="footer-bottom">
      <div class="logo-footer">
        <a href="https://avanttinovacao.com.br/" target="_blank"><img src="./app/assets/img/logos/logo-clara-st.png"
            class="logo" alt="Logo" /></a>
      </div>
    </div>
  </footer>
</body>

</html>