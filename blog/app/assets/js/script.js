window.addEventListener("DOMContentLoaded", () => {
   let linkActive = 0;

   if (window.location.pathname.includes("home")) {
      linkActive = 0;
   } else if (window.location.pathname.includes("posts") || window.location.pathname.includes("updatePost") || window.location.pathname.includes("addPost")) {
      linkActive = 1;
   } else if (window.location.pathname.includes("categories")) {
      linkActive = 2;
   } else if (window.location.pathname.includes("users") || window.location.pathname.includes("profile")) {
      linkActive = 3;
   } else if (window.location.pathname.includes("blog")) {
      linkActive = 4;
   }

   var aElements = document.querySelectorAll("nav li a");

   aElements[linkActive].classList.add("active");

   var url = window.location.href;
   var cleanUrl = url.split("?")[0];
   window.history.replaceState({}, document.title, cleanUrl);
});

// navbar
const navBar = document.querySelector(".navbar");
let prevScrollPos = window.scrollY;

window.addEventListener("scroll", function () {
   let currScrollPos = window.scrollY;

   if (currScrollPos > prevScrollPos) {
      navBar.style.transform = `translateY(-105%)`;
   } else {
      navBar.style.transform = `translateY(0%)`;
   }

   prevScrollPos = currScrollPos;
});
