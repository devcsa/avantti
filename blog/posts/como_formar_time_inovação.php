<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset='utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <meta name='description'
    content='Software de gestão da inovação que te ajuda a provar resultados de forma prática, direto ao ponto.' />
  <title>Como formar um time de inovação orientado a resultados? - Avantt.i</title>

  <!-- Favicon -->
  <link href='../app/assets/img/favicon.png' rel='icon' />

  <link href='https://fonts.googleapis.com' rel='preconnect' />
  <link href='https://fonts.gstatic.com' rel='preconnect' crossorigin />

  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <link href='../app/assets/css/vendor/bootstrap.min.css' rel='stylesheet' />
  <link href='../app/assets/css/css.css' rel='stylesheet' />
</head>

<body>

  <?php
  include '../app/Models/blog/blogStaticModel.php';
  ?>

  <header>
    <div class='container-fluid position-relative p-0'>
      <nav class='navbar navbar-expand-lg navbar-dark px-4 py-3 py-lg-0'>
        <div class='d-flex justify-content-center' id='logo-header'>
          <a href='/index'><img id='imglogo' src='../app/assets/img/logos/logo-clara.png' class='logo' alt='Logo' /></a>
          <div class='link-blog'><a class='blog-link' href='blog'>/Blog</a></div>
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



      <div class='container-fluid bg-primary py-3 bg-blog-post'>
        <div class='row py-4'>
          <div class='titulo-mobile mt-6 pt-3 title-blog'>
            <h1 class='main-title animated zoomIn mb-4'>Como formar um time de inovação orientado a resultados?</h1>
            <div class='d-flex mb-2 detail-post'>
              <small><i class='far fa-user me-2'></i><a href='./blog?authorID=28'>Lucas</a> | <a
                  href='./blog?categoryID=1'>Cultura de Inovação</a></small>
            </div>
            <div class='d-flex detail-post'>
              <small><i class='far fa-calendar-alt me-2'></i>30 Ago, 2024 | Atualizado em 30 Ago, 2024</small>
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
            <img class='img-fluid' src='../app/assets/img/posts/destaques/39_Design community-pana (1).png'
              alt='Imagem Destaque' />
          </div>
          <div class='content-blog position-relative overflow-hidden'>
            <div class="SCXW130699660 BCX8">
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">&nbsp;</div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Houve um tempo em que a inova&ccedil;&atilde;o era sin&ocirc;nimo de grandes
                      descobertas disruptivas, como a inven&ccedil;&atilde;o da roda, a eletricidade ou o
                      autom&oacute;vel. Era quase um momento de 'Eureka!'. Antes, os principais avan&ccedil;os que
                      impactavam a humanidade eram frutos dos esfor&ccedil;os de indiv&iacute;duos. Hoje, no entanto, a
                      inova&ccedil;&atilde;o no mundo corporativo est&aacute; mais voltada para a forma&ccedil;&atilde;o
                      de times multidisciplinares de inova&ccedil;&atilde;o ou, inspirados pelas startups, as famosas
                    </span><span class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">squads</span><span
                      class="NormalTextRun SCXW130699660 BCX8">.</span></span><span class="EOP SCXW130699660 BCX8"
                    data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Mas calma! Se voc&ecirc; est&aacute; pensando em viajar o mundo em busca dos melhores
                      talentos para compor um time de inova&ccedil;&atilde;o, tire alguns minutos para ler este artigo.
                      Um dos maiores desafios da inova&ccedil;&atilde;o corporativa vai al&eacute;m de criar
                      estrat&eacute;gias, planejar, gerar ideias disruptivas, implementar e governar. Trata-se de um
                      processo cont&iacute;nuo de cultura corporativa experimental. E para isso, &eacute; essencial
                      saber como formar e agrupar times de inova&ccedil;&atilde;o que saibam identificar
                      oportunidades.</span></span><span class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span>
                </p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <h3 class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Formando um
                      Time de Inova&ccedil;&atilde;o Orientado a Resultados</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></h3>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Um grande exemplo de sucesso em formar e agrupar times de inova&ccedil;&atilde;o
                      &eacute; o da Pfizer, sob a lideran&ccedil;a do ex-chefe de inova&ccedil;&atilde;o, Dan
                    </span><span class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Seewald</span><span
                      class="NormalTextRun SCXW130699660 BCX8">, que aplicou a metodologia para mais de 70 mil
                      funcion&aacute;rios. A efic&aacute;cia do programa resultou da implementa&ccedil;&atilde;o de
                      m&eacute;todos para desenvolver novas ideias e assumir riscos calculados por meio da
                      experimenta&ccedil;&atilde;o, ou seja, aplicando uma abordagem criativa para
                      resolu&ccedil;&atilde;o de problemas e cria&ccedil;&atilde;o de uma cultura
                      inovadora.</span></span><span class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <h3 class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Incentivando a
                      Experimenta&ccedil;&atilde;o na Organiza&ccedil;&atilde;o</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></h3>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;N&atilde;o &eacute; segredo que incentivar a experimenta&ccedil;&atilde;o em grandes
                      corpora&ccedil;&otilde;es multinacionais &eacute; desafiador, considerando milhares de
                      funcion&aacute;rios espalhados pelo mundo. Comumente, acredita-se que a cultura de
                      inova&ccedil;&atilde;o deve ser disseminada de cima para baixo, ou seja, do topo da
                      lideran&ccedil;a. Mas ser&aacute; que esse &eacute; o &uacute;nico caminho? Dan </span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Seewald</span><span
                      class="NormalTextRun SCXW130699660 BCX8">, ao liderar um dos maiores cases na Pfizer, mostrou que
                      um programa de inova&ccedil;&atilde;o proativo, estruturado desde a base e promovendo a
                      experimenta&ccedil;&atilde;o para todos, pode ser mais eficaz.</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Com uma cultura que permite "experimentar e falhar livremente at&eacute;
                      alcan&ccedil;ar o sucesso", o programa foi estruturado. Isso envolveu a aplica&ccedil;&atilde;o de
                      v&aacute;rias ferramentas, treinamentos e a conex&atilde;o de uma rede de times de
                      inova&ccedil;&atilde;o. O projeto &ldquo;</span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Dare</span> <span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">to</span> <span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Try</span><span
                      class="NormalTextRun SCXW130699660 BCX8">&rdquo; &eacute; um exemplo de como a
                      experimenta&ccedil;&atilde;o pode resultar em inova&ccedil;&atilde;o, com uma abordagem
                      descentralizada, mas centralizando os esfor&ccedil;os.</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <h3 class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Desenvolvendo
                      Potenciais e Aperfei&ccedil;oando Habilidades</span></span><span class="EOP SCXW130699660 BCX8"
                    data-ccp-props="{">&nbsp;</span></h3>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Para desenvolver potenciais e aperfei&ccedil;oar habilidades na
                      forma&ccedil;&atilde;o de times de inova&ccedil;&atilde;o, Dan </span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Seewald</span><span
                      class="NormalTextRun SCXW130699660 BCX8"> se inspirou em suas experi&ecirc;ncias como lutador de
                      luta livre, criando princ&iacute;pios baseados em tr&ecirc;s pontos principais:</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="ListContainerWrapper SCXW130699660 BCX8" style="text-align: justify;">
                <ul class="BulletListStyle1 SCXW130699660 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW130699660 BCX8" role="listitem" data-leveltext=""
                    data-font="Symbol" data-listid="26" data-list-defn-props="{" aria-setsize="-1"
                    data-aria-posinset="1" data-aria-level="1">
                    <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span
                          class="NormalTextRun SCXW130699660 BCX8">Atra&ccedil;&atilde;o e contrata&ccedil;&atilde;o por
                          perfil</span></span><span class="TextRun SCXW130699660 BCX8" lang="PT-BR" xml:lang="PT-BR"
                        data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">: Antes de considerar
                          habilidades t&eacute;cnicas (hard skills), &eacute; essencial criar um perfil com as
                          habilidades comportamentais (soft skills) esperadas, que se conectem com a cultura da empresa
                          para formar times multidisciplinares complementares.</span></span><span
                        class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW130699660 BCX8" style="text-align: justify;">
                <ul class="BulletListStyle1 SCXW130699660 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW130699660 BCX8" role="listitem" data-leveltext=""
                    data-font="Symbol" data-listid="26" data-list-defn-props="{" aria-setsize="-1"
                    data-aria-posinset="2" data-aria-level="1">
                    <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Treinamento
                          e desenvolvimento</span></span><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">: Embora
                          treinamentos colaborativos sejam importantes, o ideal &eacute; que o processo permita que cada
                          participante atue com autonomia, destacando-se de maneira independente.</span></span><span
                        class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
                  </li>
                </ul>
              </div>
              <div class="ListContainerWrapper SCXW130699660 BCX8" style="text-align: justify;">
                <ul class="BulletListStyle1 SCXW130699660 BCX8" role="list">
                  <li class="OutlineElement Ltr SCXW130699660 BCX8" role="listitem" data-leveltext=""
                    data-font="Symbol" data-listid="26" data-list-defn-props="{" aria-setsize="-1"
                    data-aria-posinset="3" data-aria-level="1">
                    <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Engajamento
                          e reten&ccedil;&atilde;o</span></span><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                        xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">: Este
                          &eacute; possivelmente um dos pontos mais desafiadores. Muitas organiza&ccedil;&otilde;es
                          n&atilde;o dedicam o esfor&ccedil;o necess&aacute;rio, resultando em alta rotatividade, perda
                          de talentos desenvolvidos e tempo perdido com novos treinamentos.</span></span> <span
                        class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
                  </li>
                </ul>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Portanto, &eacute; fundamental atrair, contratar e treinar perfis alinhados &agrave;
                      cultura e estrat&eacute;gia da empresa. Al&eacute;m disso, manter a motiva&ccedil;&atilde;o e
                      transpar&ecirc;ncia em abordagens colaborativas cont&iacute;nuas &eacute; igualmente importante.
                      As metodologias &aacute;geis s&atilde;o uma &oacute;tima solu&ccedil;&atilde;o para
                      isso!</span></span><span class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <h3 class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Qual o Perfil
                      de um Time de Inova&ccedil;&atilde;o?</span></span><span class="EOP SCXW130699660 BCX8"
                    data-ccp-props="{">&nbsp;</span></h3>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Como mencionado, &eacute; crucial atrair e contratar perfis com habilidades
                      comportamentais que se alinhem &agrave; cultura de inova&ccedil;&atilde;o da empresa. Aqui
                      est&atilde;o as principais caracter&iacute;sticas para formar times de inova&ccedil;&atilde;o de
                      alta performance:</span></span><span class="EOP SCXW130699660 BCX8"
                    data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Com essas caracter&iacute;sticas, os times de inova&ccedil;&atilde;o est&atilde;o bem
                      encaminhados. Eles auxiliam &aacute;reas e equipes na identifica&ccedil;&atilde;o de problemas e
                      oportunidades, buscando solu&ccedil;&otilde;es inovadoras e eficazes.</span></span> <span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <h3 class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">Os Porta-Vozes
                      e Disseminadores da Cultura de Experimenta&ccedil;&atilde;o</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></h3>
              </div>
            </div>
            <div class="SCXW130699660 BCX8">
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Inspirados nos conceitos de Dan </span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Seewald</span><span
                      class="NormalTextRun SCXW130699660 BCX8"> e explorando pr&aacute;ticas para desenvolver potenciais
                      e aperfei&ccedil;oar habilidades, podemos entender esses times como porta-vozes e disseminadores
                      da cultura de inova&ccedil;&atilde;o por meio da experimenta&ccedil;&atilde;o.</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8" style="text-align: justify;">
                <p class="Paragraph SCXW130699660 BCX8"><span class="TextRun SCXW130699660 BCX8" lang="PT-BR"
                    xml:lang="PT-BR" data-contrast="auto"><span class="NormalTextRun SCXW130699660 BCX8">&nbsp; &nbsp;
                      &nbsp; &nbsp;Suas caracter&iacute;sticas exemplares e habilidades aperfei&ccedil;oadas servem como
                      modelos e replicadores de conceitos inovadores por meio de treinamentos e desenvolvimento de novos
                      talentos e times de inova&ccedil;&atilde;o. O programa &ldquo;</span><span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Dare</span> <span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">to</span> <span
                      class="NormalTextRun SpellingErrorV2Themed SCXW130699660 BCX8">Try</span><span
                      class="NormalTextRun SCXW130699660 BCX8">&rdquo; continua em constante aprendizado e melhorias,
                      mostrando que a inova&ccedil;&atilde;o &eacute; um processo cont&iacute;nuo e adapt&aacute;vel
                      &agrave; realidade e estrat&eacute;gia de cada organiza&ccedil;&atilde;o.</span></span><span
                    class="EOP SCXW130699660 BCX8" data-ccp-props="{">&nbsp;</span></p>
              </div>
              <div class="OutlineElement Ltr SCXW130699660 BCX8">
                <h3 style="text-align: justify;">Sobre a Avantt.i&nbsp;</h3>
                <p style="text-align: justify;"><span class="TextRun SCXW195930854 BCX8" lang="PT-BR" xml:lang="PT-BR"
                    data-contrast="auto"><span class="NormalTextRun SCXW195930854 BCX8">&nbsp; &nbsp; &nbsp;
                      &nbsp;</span></span>A Avantt.i &eacute; uma plataforma de inova&ccedil;&atilde;o desenvolvida pela
                  Inventta, para gestores de inova&ccedil;&atilde;o e gerentes de projeto.</p>
                <p style="text-align: justify;"><span class="TextRun SCXW195930854 BCX8" lang="PT-BR" xml:lang="PT-BR"
                    data-contrast="auto"><span class="NormalTextRun SCXW195930854 BCX8">&nbsp; &nbsp; &nbsp;
                      &nbsp;</span></span>Com m&oacute;dulos de intra, open e gest&atilde;o do portf&oacute;lio,
                  oferecemos uma vis&atilde;o completa da Gest&atilde;o da Inova&ccedil;&atilde;o para alavancar suas
                  iniciativas.</p>
                <ul>
                  <li style="text-align: justify;"><strong>Vis&atilde;o global e gest&atilde;o do portf&oacute;lio:
                    </strong>Atrav&eacute;s da consolida&ccedil;&atilde;o do portf&oacute;lio de inova&ccedil;&atilde;o,
                    a Avantt.i ajuda a identificar os principais projetos e avan&ccedil;ar com assertividade. Tudo em
                    uma &uacute;nica plataforma.&nbsp;</li>
                  <li style="text-align: justify;"><strong>Programa de intra: </strong>Crie desafios e obtenha
                    participa&ccedil;&atilde;o dos colaboradores. A inova&ccedil;&atilde;o vira rotina e voc&ecirc;
                    impulsiona a cultura de inova&ccedil;&atilde;o na empresa.</li>
                  <li style="text-align: justify;"><strong>Open Innovation:</strong> Chame startups e parceiros para
                    desafios, gerencie parceria na plataforma e tenha acesso a mais de 23.000 startups na nossa base.
                  </li>
                  <li style="text-align: justify;"><strong>M&eacute;tricas Acion&aacute;veis: </strong>Influencie a
                    organiza&ccedil;&atilde;o a investir em esfor&ccedil;os de inova&ccedil;&atilde;o com base em
                    m&eacute;tricas claras e acion&aacute;veis. Me&ccedil;a resultados dos projetos e comunique o
                    sucesso das iniciativas</li>
                  <li style="text-align: justify;"><strong>Inova&ccedil;&atilde;o Integrada e Transparente:
                    </strong>Gerencie projetos de diferentes esteiras e horizontes, com colabora&ccedil;&atilde;o de
                    parceiros e equipe, visualizando o portf&oacute;lio globalmente.&nbsp;&nbsp;</li>
                  <li style="text-align: justify;"><strong>Engajamento com Conhecimento: </strong>Transforme a
                    inova&ccedil;&atilde;o em h&aacute;bito com trilhas de conhecimento e mentorias dispon&iacute;veis
                    ao longo da jornada.&nbsp;<br><br>Conhe&ccedil;a <a
                      href="https://materiais.avanttinovacao.com.br/avantti-inovacao-primeiro-passo">aqui</a>, solicite
                    uma demonstra&ccedil;&atilde;o guiada e teste gr&aacute;tis.<a
                      href="https://materiais.avanttinovacao.com.br/avantti-inovacao-primeiro-passo"><span
                        class="EOP SCXW195930854 BCX8" data-ccp-props="{"><img
                          src="https://d335luupugsy2.cloudfront.net/cms/files/808420/1720784635/$63vucuqtfj9"
                          width="673" height="448"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

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
              echo '<img class="img-fluid" src="../app/assets/img/posts/destaques/' . $row_recents_posts["image_cover"] . '" style="width: 100px; height: 100px; object-fit: cover" alt="Posts Recentes" />';
              echo '<a href="./viewPost?postID=' . $row_recents_posts["id"] . '" class="blog-recents fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">' . $row_recents_posts["title"] . '</a>';
              echo '</div>';
            }
            ?>
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
              <img src="../app/assets/img/labi.gif" alt="Gif Animado" class="img-fluid rounded" />
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

  <footer id='footer'>
    <div class='footer-bottom'>
      <div class='logo-footer'>
        <a href='https://avanttinovacao.com.br/' target='_blank'><img src='../app/assets/img/logos/logo-clara-st.png'
            class='logo' alt='Logo' /></a>
      </div>
    </div>
  </footer>

  <!-- Inserir no script generate -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-back-to-top rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../app/assets/js/vendor/wow/wow.min.js"></script>
  <script src="../app/assets/js/vendor/easing/easing.min.js"></script>
  <script src="../app/assets/js/vendor/waypoints/waypoints.min.js"></script>

  <!-- Template Javascript -->
  <script src="../app/assets/js/main.js"></script>

</body>

</html>