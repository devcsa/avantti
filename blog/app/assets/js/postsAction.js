const modalMessage = document.getElementById("modal-message-text");
const confirmDelete = document.getElementById("confirm-delete");
const cancelDelete = document.getElementById("cancel-delete");
const btnDismiss = document.getElementById("btn-dismiss");

confirmDelete.addEventListener("click", () => {
   const params = new URLSearchParams(window.location.search);
   const postID = params.get("postID");

   window.location.href = "./app/Models/posts/deletePost.php?postID=" + postID;
});

$("#modal-message").on("hide.bs.modal", () => {
   var url = window.location.href;
   var cleanUrl = url.split("?")[0];
   window.history.replaceState({}, document.title, cleanUrl);
});

$(document).ready(function () {
   $(".postDelete").click(function () {
      var postID = $(this).closest("tr").find(".postId").text();

      confirmDelete.style.display = "block";
      btnDismiss.textContent = "Cancelar";

      messageUser = "Deseja realmente excluir a postagem selecionada?";

      var newUrl = window.location.href.split("?")[0] + "?postID=" + postID;
      history.pushState({}, "", newUrl);

      modalMessage.textContent = messageUser;
      $("#modal-message").modal("show");
   });
});

document.addEventListener("DOMContentLoaded", () => {
   let params = new URLSearchParams(window.location.search);
   msgStatus = params.get("status");

   if (msgStatus) {
      sendModalStatus(msgStatus);
   }
});

function sendModalStatus(message) {
   confirmDelete.style.display = "none";
   btnDismiss.textContent = "Fechar";
   btnDismiss.classList.remove("btn-secondary");

   if (message === "DeletePostError") {
      messageUser = "Não foi possível excluir a postagem!";
      btnDismiss.classList.add("btn-danger");
   } else {
      if (message === "DeletePostSuccess") {
         messageUser = "Postagem excluída com sucesso!";
         btnDismiss.classList.add("btn-success");
      } else {
         let mensagem = message.split("?")[0];

         if (mensagem === "blank") {
            messageUser = "Favor preencher todos os campos!";
            btnDismiss.classList.add("btn-warning");
         } else {
            if (mensagem === "PostSuccess") {
               messageUser = "Postagem adicionada com sucesso!";
               btnDismiss.classList.add("btn-success");
            } else {
               if (mensagem === "PostUpdated") {
                  messageUser = "Postagem alterada com sucesso!";
                  btnDismiss.classList.add("btn-success");
               } else {
                  if (mensagem === "PostError") {
                     messageUser = "Não foi possível adicionar a Postagem!";
                     btnDismiss.classList.add("btn-warning");
                  }
               }
            }
         }
      }
   }

   modalMessage.textContent = messageUser;
   $("#modal-message").modal("show");

   var url = window.location.href;
   var cleanUrl = url.split("?")[0];
   window.history.replaceState({}, document.title, cleanUrl);
}
