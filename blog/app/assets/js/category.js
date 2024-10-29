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
   const categoryID = params.get("categoryId");

   window.location.href = "./app/Models/categories/DeleteCategory.php?categoryID=" + categoryID;
});

$(document).ready(function () {
   $(".categoryDelete").click(function () {
      var categoryId = $(this).closest("tr").find(".categoryId").text();

      confirmDelete.style.display = "block";
      btnDismiss.textContent = "Cancelar";

      messageUser = "Deseja realmente excluir a categoria selecionada?";

      var newUrl = window.location.href.split("?")[0] + "?categoryId=" + categoryId;
      history.pushState({}, "", newUrl);

      modalMessage.textContent = messageUser;
      $("#modal-message").modal("show");
   });

   $(".categoryUpdate").click(function () {
      const categoryName = $(this).closest("tr").find(".category-name").text();
      const categoryID = $(this).closest("tr").find(".categoryId").text();

      $("#categoryID").val(categoryID);
      $("#name-category").val(categoryName);

      $("#editCategoryModal").modal("show");
   });
});

// CATEGORY FORM

document.addEventListener("DOMContentLoaded", function () {
   var editCategoryForm = document.getElementById("editCategoryForm");

   editCategoryForm.addEventListener("submit", function (event) {
      event.preventDefault();

      var paramsURL = new URLSearchParams(window.location.search);
      let categoryID = paramsURL.get("categoryID");

      let category = document.getElementById("name-category").value;

      if (category) {
         //window.location.href = "./app/Models/categories/EditCategory.php?categoryID=" + categoryID;
         editCategoryForm.submit();
      } else {
         sendModalStatus("blank");
      }
   });
});

function sendModalStatus(message) {
   confirmDelete.style.display = "none";
   btnDismiss.textContent = "Fechar";
   btnDismiss.classList.remove("btn-secondary");

   if (message === "DeleteCategoryError") {
      messageUser = "Não foi possível excluir a categoria!";
      btnDismiss.classList.add("btn-danger");
   } else {
      if (message === "DeleteCategorySuccess") {
         messageUser = "Categoria excluída com sucesso!";
         btnDismiss.classList.add("btn-success");
      } else {
         let mensagem = message.split("?")[0];

         if (mensagem === "blank") {
            messageUser = "Nome da categoria é obrigatório!";
            btnDismiss.classList.add("btn-warning");
         } else {
            if (mensagem === "CategorySuccess") {
               messageUser = "Categoria alterada com sucesso!";
               btnDismiss.classList.add("btn-success");
            } else {
               if (mensagem === "CategoryError") {
                  messageUser = "Não foi possível alterar o cadastro!";
                  btnDismiss.classList.add("btn-warning");
               } else {
                  if (mensagem === "CategoryExist") {
                     let category = document.getElementById("name-category");
                     btnDismiss.classList.add("btn-warning");
                     category.value = message.split("?")[1];

                     $("#ediCategoryModal").modal("show");

                     messageUser = "Categoria já cadastrada!";
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
