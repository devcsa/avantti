const modalMessage = document.getElementById("modal-message-text");
const confirmDelete = document.getElementById("confirm-delete");
const cancelDelete = document.getElementById("cancel-delete");
const btnDismiss = document.getElementById("btn-dismiss");
var messageUser;

const modal = document.getElementById("modal-message");

$("#modal-message").on("hide.bs.modal", () => {
   var url = window.location.href;
   var cleanUrl = url.split("?")[0];
   window.history.replaceState({}, document.title, cleanUrl);
});

confirmDelete.addEventListener("click", () => {
   const params = new URLSearchParams(window.location.search);
   const userID = params.get("userId");

   window.location.href = "./app/Models/users/DeleteUser.php?userID=" + userID;
});

$(document).ready(function () {
   $(".userDelete").click(function () {
      var userId = $(this).closest("tr").find(".userId").text();

      confirmDelete.style.display = "block";
      btnDismiss.textContent = "Cancelar";

      messageUser = "Deseja realmente excluir o usuário selecionado?";

      var newUrl = window.location.href.split("?")[0] + "?userId=" + userId;
      history.pushState({}, "", newUrl);

      modalMessage.textContent = messageUser;
      $("#modal-message").modal("show");
   });

   $(".userUpdate").click(function () {
      const userID = $(this).closest("tr").find(".userId").text();

      window.location.href = "./profile.php?userID=" + userID;
   });
});

function sendModalStatus(mensagem) {
   if (mensagem === "DeleteUserError") {
      messageUser = "Não foi possível excluir o usuário!";
   } else {
      if (mensagem === "DeleteUserSuccess") {
         messageUser = "Usuário excluído com sucesso!";
      }
   }

   confirmDelete.style.display = "none";
   btnDismiss.textContent = "Fechar";

   modalMessage.textContent = messageUser;
   $("#modal-message").modal("show");
}
