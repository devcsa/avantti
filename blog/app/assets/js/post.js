const btnEditImage = document.getElementById("btnEditImage");
const btnViewImage = document.getElementById("btnViewImage");
const uploadButton = document.getElementById("featured-image");
const btnRemoveImage = document.getElementById("btnRemoveImage");
const imageView = document.getElementById("image-view");
const ImageURLInput = document.getElementById("urlImage");
const iconViewImage = document.getElementById("iconViewImage");
const fileName = document.getElementById("image-file-name");
const titlePost = document.getElementById("title");
const categoryPost = document.getElementById("category");
const titlePage = document.getElementById("title_page");
const urlPage = document.getElementById("url_page");
const contentPost = document.getElementsByName("editorContent");
const modalMessage = document.getElementById("modal-message-text");
const confirmDelete = document.getElementById("confirm-delete");
const cancelDelete = document.getElementById("cancel-delete");
const btnDismiss = document.getElementById("btn-dismiss");
const actionPost = document.getElementById("actionPost");

var messageUser;

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

document.addEventListener("DOMContentLoaded", () => {
   const authorId = document.getElementById("user_ID");
   let user = document.getElementById("userId");

   user.value = authorId.value;
});

btnViewImage.addEventListener("click", () => {
   if (imageView.style.display === "none") {
      imageView.style.display = "block";
      iconViewImage.classList.replace("fa-eye", "fa-eye-slash");
      iconViewImage.setAttribute("title", "Esconder imagem");
   } else {
      imageView.style.display = "none";
      iconViewImage.classList.replace("fa-eye-slash", "fa-eye");
      iconViewImage.setAttribute("title", "Visualizar imagem");
   }
});

btnEditImage.addEventListener("click", function () {
   uploadButton.click();
});

btnRemoveImage.addEventListener("click", () => {
   imageView.src = "./app/assets/img/posts/sizes/destaque.jpg";
   fileName.value = "";
   imageView.style.display = "none";
   iconViewImage.classList.replace("fa-eye-slash", "fa-eye");
   iconViewImage.setAttribute("title", "Visualizar imagem");
});

function imagePreview() {
   const fotoPerfil = uploadButton.files[0];

   fileName.value = fotoPerfil.name;

   const reader = new FileReader();
   reader.onload = function (event) {
      imageView.src = event.target.result;
   };
   reader.readAsDataURL(fotoPerfil);
}

uploadButton.addEventListener("change", () => {
   imagePreview();
});

uploadButton.addEventListener("change", function (event) {
   var selectedFile = event.target.files[0];
   var objectURL = URL.createObjectURL(selectedFile);
   ImageURLInput.value = objectURL;

   imageView.style.display = "block";
   iconViewImage.classList.replace("fa-eye", "fa-eye-slash");
   iconViewImage.setAttribute("title", "Esconder imagem");
});

document.addEventListener("DOMContentLoaded", function () {
   messageUser = "";
   var addPostForm = document.getElementById("addPostForm");

   addPostForm.addEventListener("submit", function (event) {
      event.preventDefault();

      var editorContent = tinymce.get("content").getContent();

      if (titlePost.value.trim() == "") {
         messageUser = "Título da Postagem é obrigatório!";
      } else {
         if (categoryPost.value == "") {
            messageUser = "Categoria da Postagem é obrigatório!";
         } else {
            if (titlePage.value == "") {
               messageUser = "Meta-título é obrigatório!";
            } else {
               if (urlPage.value == "") {
                  messageUser = "URL da página é obrigatório!";
               } else {
                  if (fileName.value == "") {
                     messageUser = "Imagem da Postagem é obrigatório!";
                  } else {
                     if (editorContent == "") {
                        messageUser = "Conteúdo da Postagem é obrigatório!";
                     }
                  }
               }
            }
         }
      }

      if (!messageUser == "") {
         confirmDelete.style.display = "none";
         btnDismiss.textContent = "Fechar";
         btnDismiss.classList.add("btn-danger");

         modalMessage.textContent = messageUser;
         $("#modal-message").modal("show");
         messageUser = "";
      } else {
         addPostForm.submit();
      }
   });
});

// var paramsURL = new URLSearchParams(window.location.search);
// let categoryID = paramsURL.get("categoryID");

// let category = document.getElementById("name-category").value;

// if (category) {
//    //window.location.href = "./app/Models/categories/EditCategory.php?categoryID=" + categoryID;
//    editCategoryForm.submit();
// } else {
//    sendModalStatus("blank");
// }

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
   messageUser = "";

   var url = window.location.href;
   var cleanUrl = url.split("?")[0];
   window.history.replaceState({}, document.title, cleanUrl);
}

// INICIAR TINYMCE
tinymce.init({
   // selector: "textarea#premiumskinsandicons-snow",
   selector: "textarea#content",
   language: "pt_BR",
   skin: "snow",
   plugins: "quickbars image lists code table link",
   toolbar: "blocks | forecolor backcolor | bold italic underline strikethrough | link image blockquote | align bullist numlist | code",
   // icons: "thin",
   // plugins: "quickbars image lists code table codesample link",
   // toolbar: "blocks | forecolor backcolor | bold italic underline strikethrough | link image blockquote codesample | align bullist numlist | code | link",
   height: 400,
   content_style: "body { margin: 2rem 5%; }",
   images_upload_url: "./app/helper/upload_ImgBlog.php",
   images_upload_base_path: "./app/assets/img/posts/basepath",
});

// var editorContent = tinymce.get("content").getContent();

// const form = document.querySelector("form");
// form.addEventListener("formdata", (event) => {
//    // Append Quill content before submitting
//    event.formData.append("about", JSON.stringify(quill.getContents().ops));
// });
