const btnAddUser = document.getElementById("btnAddUser");
const confirmDelete = document.getElementById("confirm-delete");
const cancelDelete = document.getElementById("cancel-delete");
const btnDismiss = document.getElementById("btn-dismiss");

confirmDelete.addEventListener("click", () => {
   const params = new URLSearchParams(window.location.search);
   const postID = params.get("postID");

   window.location.href = "./app/Models/posts/deletePost.php?postID=" + postID;
});

document.addEventListener("DOMContentLoaded", () => {
   var paramsError = new URLSearchParams(window.location.search);
   let error = paramsError.get("error");

   if (error == "categoryexist") {
      {
         $("#addCategoryModal").modal();
      }
   }
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
      messageUser = "";
   });
});

const modalMessage = document.getElementById("modal-message-text");
var messageUser;

document.addEventListener("DOMContentLoaded", function () {
   var addUserForm = document.getElementById("addUserForm");

   addUserForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Impede o comportamento padrão do formulário (envio tradicional)

      let username = document.getElementById("name");
      let email = document.getElementById("email");
      let phone = document.getElementById("phone");
      let password = document.getElementById("password");
      let status_user = document.getElementById("status_user");
      let type_user = document.getElementById("type_user");

      if (username.value && email.value && phone.value && password.value && status_user.value && type_user.value) {
         // Se todos os campos estiverem preenchidos, o formulário será enviado
         addUserForm.submit();
      } else {
         // Se algum campo estiver em branco, exiba o modal de aviso
         sendModalStatus("blank");
      }
   });
});

// Check User Type

document.addEventListener("DOMContentLoaded", function () {
   var typeUserId = document.getElementById("typeUserId").value;

   if (typeUserId !== "1") {
      btnAddUser.style.display = "none";
   }
});

function sendModalStatus(message) {
   let mensagem = message.split("?")[0];

   if (mensagem === "UserError") {
      messageUser = "Não foi possível efetuar o cadastro!";
   } else {
      if (mensagem === "UserSuccess") {
         messageUser = "Usuário cadastrado com sucesso!";
      } else {
         if (mensagem === "blank") {
            messageUser = "Por favor, preencha todos os campos!";
         } else {
            if (mensagem === "UserExist") {
               let username = document.getElementById("name");
               let email = document.getElementById("email");
               let phone = document.getElementById("phone");
               let password = document.getElementById("password");
               let status_user = document.getElementById("status_user");
               let type_user = document.getElementById("type_user");

               const params = message;
               username.value = params.split("?")[1];
               email.value = params.split("?")[2];
               phone.value = params.split("?")[3];
               password.value = params.split("?")[4];
               status_user.value = params.split("?")[5];
               type_user.value = params.split("?")[6];

               $("#addUserModal").modal("show");

               messageUser = "E-mail já em uso!";
            } else {
               if (mensagem === "CategorySuccess") {
                  messageUser = "Categoria cadastrada com sucesso!";
               } else {
                  if (mensagem === "CategoryError") {
                     messageUser = "Não foi possível efetuar o cadastro!";
                  } else {
                     if (mensagem === "CategoryExist") {
                        let category = document.getElementById("name-category");

                        const params = message;
                        category.value = params.split("?")[1];

                        $("#addCategoryModal").modal("show");

                        messageUser = "Categoria já cadastrada!";
                     }
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
