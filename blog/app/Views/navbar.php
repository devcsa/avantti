<?php


echo "<nav class='navbar navbar-expand-sm navbar-dark bg-dark py-2'>
<div class='container'>

<a href='home' class='navbar-brand'><img src='./app/assets/img/logos/logo-clara-st.png' alt='Logo Avantti' class='logo-image'/></a>
  <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
      <li class='nav-item px-2'>
        <a href='home' class='nav-link font-weight-bold'>Dashboard</a>
      </li>
      <li class='nav-item px-2'>
        <a href='posts' class='nav-link font-weight-bold'>Postagens</a>
      </li>
      <li class='nav-item px-2'>
        <a href='categories' class='nav-link font-weight-bold'>Categorias</a>
      </li>
      <li class='nav-item px-2'>
        <a href='users' class='nav-link font-weight-bold'>Usuários</a>
      </li>
      <li class='nav-item px-2'>
        <a href='blog' class='nav-link font-weight-bold'>Blog</a>
      </li>
    </ul>
    <ul class='navbar-nav ml-auto'>
      <li class='nav-item dropdown mr-3'>
        <a href='#' class='nav-link dropdown-toggle font-weight-bold mt-2' data-toggle='dropdown'> <i class='fa fa-user'></i> " .  $_SESSION["username"] . "</a>
        <div class='dropdown-menu'>
          <a href='./profile?userID="  .  $_SESSION['id'] . "'class='dropdown-item'> <i class='fa fa-user-circle'></i> Minha Conta </a>
          <a href='settings' class='dropdown-item'> <i class='fa fa-gear'></i> Configurações </a>
        </div>
      </li>
      <li class='nav-item'>
        <a href='./core/logout' class='nav-link mt-1'> <i class='fa fa-user-times' aria-hidden='true'></i> Sair </a>
      </li>
    </ul>
  </div>
</div>
</nav>";

echo '<input type="hidden" name="typeUserId" id="typeUserId" value="' . $_SESSION['type_user_id'] . '">';
echo '<input type="hidden" name="user_ID" id="user_ID" value="' . $_SESSION['id'] . '">';