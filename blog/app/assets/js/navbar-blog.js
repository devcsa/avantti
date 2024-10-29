const navbar_blog = document.getElementById("navbar-blog");

const staticPosts = async () => {
   const responseData = await fetch("../app/Models/blog/blogStaticModel.php");
   const data = await responseData.json();

   //  console.log(data);

   const categoriesBlog = data.categories;
   const tagsBlog = data.tags;
   const recentsPostsBlog = data.recents_posts;

   let navHTML = `
  <div class='d-flex justify-content-center' id='logo-header'>
    <a href='/index'><img id='imglogo' src='../app/assets/img/logos/logo-clara.png' class='logo' alt='Logo' /></a>
    <div class='link-blog'><a class='blog-link' href='/blog'>/Blog</a></div>
  </div>

  <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCollapse'>
    <span class='fa fa-bars'></span>
  </button>

  <div id='navbarCollapse' class='collapse navbar-collapse'>
    <div class='navbar-nav ms-auto py-0'>
      <a href='/index' class='nav-item nav-link'>Ir para o site</a>
      <div class='nav-item dropdown'>
        <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Categorias</a>
        <div class='dropdown-menu m-0'>`;

   categoriesBlog.forEach((category) => {
      navHTML += `
            <a href='./blog?categoryID=${category.id}' class='dropdown-item'>${category.name}</a>`;
   });
   navHTML += `
        </div>
      </div>
    </div>

    <div class='nav-item nav-link'>
      <div class='nav-search'>
        <input id='nav-search' type='text' class='form-control' placeholder='Buscar no blog...' />
        <button id='btn-search' class='btn btn-primary px-3'><i class='bi bi-search'></i></button>
      </div>
    </div>
  </div>`;

   navbar_blog.innerHTML = navHTML;
};

staticPosts();
