const confirmDelete = document.getElementById("confirm-delete");
const cancelDelete = document.getElementById("cancel-delete");
const btnDismiss = document.getElementById("btn-dismiss");
const modalMessage = document.getElementById("modal-message-text");
const userId = document.getElementById("userId");
var messageUser;
var msgStatus;

function enableDisabledFields() {
   document.getElementById("status_user").disabled = false;
   document.getElementById("type_user").disabled = false;
   // Adicione mais campos desabilitados conforme necessário
}

document.addEventListener("DOMContentLoaded", () => {
   let params = new URLSearchParams(window.location.search);
   msgStatus = params.get("msgStatus");

   if (msgStatus) {
      sendModalStatus(msgStatus);
   }
});

function sendModalStatus(message) {
   confirmDelete.style.display = "none";
   btnDismiss.textContent = "Fechar";
   btnDismiss.classList.remove("btn-secondary");

   if (message === "DeleteCategoryError") {
      messageUser = "Não foi possível excluir a categoria!";
      btnDismiss.classList.add("btn-danger");
   } else {
      if (message === "editPasswordSuccess") {
         messageUser = "Senha alterada com sucesso!";
         btnDismiss.classList.add("btn-success");
      } else {
         if (message === "blank") {
            messageUser = "Favor preencher todos os campos!";
            btnDismiss.classList.add("btn-warning");
         } else {
            if (message === "editUserSuccess") {
               messageUser = "Usuário alterado com sucesso!";
               btnDismiss.classList.add("btn-success");
            } else {
               if (message === "editPhotoSuccess") {
                  messageUser = "Foto alterada com sucesso!";
                  btnDismiss.classList.add("btn-success");
               } else {
                  if (message === "editPhotoExist") {
                     messageUser = "Já existe um arquivo com este nome!";
                     btnDismiss.classList.add("btn-danger");
                  }
               }
            }
         }
      }
   }

   if (messageUser == null) {
      messageUser = "Não há dados para alterar!";
      btnDismiss.classList.add("btn-warning");
   }

   modalMessage.textContent = messageUser;
   $("#modal-message").modal("show");

   var url = window.location.href;
   var cleanUrl = url.split("?")[0];
   window.history.replaceState({}, document.title, cleanUrl + "?userID=" + userId.value);
}

const btnEditPhoto = document.getElementById("btnEditPhoto");
const uploadButton = document.getElementById("fileToUpload");
const btnDeletePhoto = document.getElementById("btnDeletePhoto");
const imageDisplay = document.getElementById("image-display");
const photoURLInput = document.getElementById("photoURL");

btnDeletePhoto.addEventListener("click", () => {
   imageDisplay.src = "./app/assets/img/users/user.png";
});

//Upload Button
btnEditPhoto.addEventListener("click", function () {
   uploadButton.click();
});

imageDisplay.addEventListener("click", () => {
   uploadButton.click();
});

// Visualizar foto do perfil no formulário
function photoPreview() {
   const fotoPerfil = uploadButton.files[0];

   const reader = new FileReader();
   reader.onload = function (event) {
      imageDisplay.src = event.target.result;
   };
   reader.readAsDataURL(fotoPerfil);
}

uploadButton.addEventListener("change", () => {
   photoPreview();
});

let currentPhoto = imageDisplay.getAttribute("src");

if (currentPhoto == "./app/assets/img/users/") {
   imageDisplay.src = "./app/assets/img/users/user.png";
} else {
   imageDisplay.src = currentPhoto;
}

uploadButton.addEventListener("change", function (event) {
   var selectedFile = event.target.files[0];
   var objectURL = URL.createObjectURL(selectedFile);
   photoURLInput.value = objectURL;
});
