const navBar = document.querySelector(".navbar");

navBar.innerHTML = `<div id="logo-header">
          <a href="index"><img id="imglogo" src="./img/logo-clara.png" class="logo" alt="Logo Avantti" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index" class="nav-item nav-link">Home</a>
            <a href="conheca" class="nav-item nav-link">Como funciona</a>
            <a href="price" class="nav-item nav-link">Planos</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
              <div class="dropdown-menu m-0">
                <a id="servicos" href="services" class="dropdown-item">Ecossistema Inventta</a>
                <a id="materials" href="materiais" class="dropdown-item">Materiais</a>
                <a id="cases" href="clients" class="dropdown-item">Casos de sucesso</a>
              </div>
            </div>
            <a href="/blog/" class="nav-item nav-link">Blog</a>
          </div>
          <a href="#" class="btn btn-primary py-2 px-3 ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">Teste
            a Avantt.i</a>
        </div>`;

window.addEventListener("DOMContentLoaded", () => {
   let linkActive = 0;

   if (window.location.pathname.includes("index")) {
      linkActive = 1;
   } else if (window.location.pathname.includes("conheca")) {
      linkActive = 2;
   } else if (window.location.pathname.includes("price")) {
      linkActive = 3;
   } else if (window.location.pathname.includes("services")) {
      linkActive = 4;
      document.getElementById("servicos").classList.add("active");
   } else if (window.location.pathname.includes("materiais")) {
      linkActive = 4;
      document.getElementById("materials").classList.add("active");
   } else if (window.location.pathname.includes("clients")) {
      linkActive = 4;
      document.getElementById("cases").classList.add("active");
   } else if (window.location.pathname.includes("blog")) {
      linkActive = 5;
   }

   var aElements = document.querySelectorAll("nav div a");

   aElements[linkActive].classList.add("active");
});
