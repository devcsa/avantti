$(".blog-link").css("color", "#fff");

function viewMoreTopics(bloco) {
   const divBloco = `more-topics-${bloco}`;
   const spanBloco = `other-topics-${bloco}`;
   const arrowBloco = `icon-more-${bloco}`;
   // console.log(divBloco + " " + spanBloco);
   const moreTopics = document.getElementById(divBloco);
   if (moreTopics.innerText == "Mais...") {
      moreTopics.innerText = "Menos...";
   } else {
      moreTopics.innerText = "Mais...";
   }

   const otherTopics = document.getElementById(spanBloco);
   otherTopics.classList.toggle("more-topics-no");
   otherTopics.classList.toggle("more-topics-yes");

   const arrowTopics = document.getElementById(arrowBloco);
   arrowTopics.classList.toggle("bi-caret-down-fill");
   arrowTopics.classList.toggle("bi-caret-up-fill");
}

(function ($) {
   "use strict";

   // Spinner
   var spinner = function () {
      setTimeout(function () {
         if ($("#spinner").length > 0) {
            $("#spinner").removeClass("show");
         }
      }, 1);
   };
   spinner();

   // Initiate the wowjs
   new WOW().init();

   // Sticky Navbar
   $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
         $(".navbar").addClass("sticky-top shadow-sm");
         $("#imglogo").attr("src", "./img/logo-st.png");
         $("#imglogo").css("max-height", "40px");
         if (window.location.pathname.includes("blog")) {
            $(".blog-link").css("color", "#9D28F0");
         }
      } else {
         $(".navbar").removeClass("sticky-top shadow-sm");
         $("#imglogo").attr("src", "./img/logo-clara.png");
         $("#imglogo").css("max-height", "60px");
         if (window.location.pathname.includes("blog")) {
            $(".blog-link").css("color", "#fff");
         }
      }
   });

   // Dropdown on mouse hover
   const $dropdown = $(".dropdown");
   const $dropdownToggle = $(".dropdown-toggle");
   const $dropdownMenu = $(".dropdown-menu");
   const showClass = "show";

   $(window).on("load resize", function () {
      if (this.matchMedia("(min-width: 992px)").matches) {
         $dropdown.hover(
            function () {
               const $this = $(this);
               $this.addClass(showClass);
               $this.find($dropdownToggle).attr("aria-expanded", "true");
               $this.find($dropdownMenu).addClass(showClass);
            },
            function () {
               const $this = $(this);
               $this.removeClass(showClass);
               $this.find($dropdownToggle).attr("aria-expanded", "false");
               $this.find($dropdownMenu).removeClass(showClass);
            }
         );
      } else {
         $dropdown.off("mouseenter mouseleave");
      }
   });

   // // Back to top button
   // $(window).scroll(function () {
   //    if ($(this).scrollTop() > 100) {
   //       $(".back-to-top").fadeIn("slow");
   //    } else {
   //       $(".back-to-top").fadeOut("slow");
   //    }
   // });
   // $(".back-to-top").click(function () {
   //    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
   //    return false;
   // });

   $(window).scroll(function () {
      // Verifica a posição de rolagem da página
      if ($(this).scrollTop() > 100) {
         $(".back-to-top").fadeIn("slow");

         // Define um timeout para esconder o botão após 3 segundos se não for clicado
         clearTimeout($.data(this, "scrollTimer"));
         $.data(
            this,
            "scrollTimer",
            setTimeout(function () {
               $(".back-to-top").fadeOut("slow");
            }, 3000)
         ); // Esconde após 3000 ms (3 segundos)
      } else {
         $(".back-to-top").fadeOut("slow");
      }
   });

   // Anima a rolagem para o topo ao clicar no botão
   $(".back-to-top").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");

      // Opcional: pode adicionar aqui um clearTimeout para que o botão desapareça imediatamente após o clique
      clearTimeout($.data(window, "scrollTimer"));

      return false;
   });
})(jQuery);

const cardccr = document.getElementById("card-ccr");
const cardvotorantin = document.getElementById("card-votorantin");

function vermais_ccr() {
   cardccr.classList.toggle("flip-ccr");
}

function vermais_votorantin() {
   cardvotorantin.classList.toggle("flip-votorantin");
}

//
//

// Verifica se há algum usuário logado
function userCheck(material) {
   firebase.auth().onAuthStateChanged((user) => {
      if (user) {
         showMaterial(material);
         $("#loginModal").modal("hide");
      } else {
         formLogin();
         $("#loginModal").modal("show");
      }
   });
}

function showMaterial(material) {
   const materialShow = document.getElementById(material);
   materialShow.classList.remove("user-off");
   materialShow.innerHTML = "";
   if (material == "material-3") {
      materialShow.innerHTML = '<div><a class="button" href="./assets/materiais/Ferramentas-Programa_Grupo3.pdf" download><i class="fas fa-download me-2"></i>Baixe agora</a></div>';
   } else {
      if (material == "material-2") {
         materialShow.innerHTML = '<div><a class="button" href="./assets/materiais/Ferramentas-Programa_Grupo2.pdf" download><i class="fas fa-download me-2"></i>Baixe agora</a></div>';
      } else {
         if (material == "material-1") {
            materialShow.innerHTML = '<div><a class="button" href="./assets/materiais/Ferramentas-Programa_Grupo1.pdf" download><i class="fas fa-download me-2"></i>Baixe agora</a></div>';
         }
      }
   }
}

//
//

// Videos Materiais
function executeVideo(video, video_src) {
   var videoPlaying = document.querySelector(".videoPlaying");

   if (videoPlaying !== null) {
      var videoStop = document.getElementById(videoPlaying.id);
      videoStop.pause();
      videoStop.classList.remove("videoPlaying");
      videoStop.setAttribute("src", "");
      videoStop.removeAttribute("controls");
   }

   var videoCard = document.getElementById(video);
   videoCard.setAttribute("src", video_src);
   videoCard.setAttribute("controls", "controls");
   videoCard.setAttribute("type", "video/mp4");
   videoCard.classList.add("videoPlaying");
   videoCard.play();
}
