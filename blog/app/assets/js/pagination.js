const morePosts = document.getElementById("load-more-btn");
const n_posts = document.getElementById("n-posts");

morePosts.addEventListener("click", () => {
   var posts = Number(n_posts.value);

   var limit = posts + 2;

   window.location.href = "./blog.php?limit=" + limit;
});
