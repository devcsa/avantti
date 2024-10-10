function login() {
   //  showLoading();
   firebase
      .auth()
      .signInWithEmailAndPassword(form.email().value, form.password().value)
      .then((response) => {
         //  hideLoading();
         //  window.location.href = "dashboard.php";
         bootbox.dialog({
            title: "Aviso",
            message: "Usuário logado com sucesso!",
            size: "medium",
            onEscape: true,
            buttons: {
               cancel: {
                  label: "OK",
                  className: "btn-outline-success",
               },
            },
         });
      })
      .catch((error) => {
         //  hideLoading();
         bootbox.dialog({
            title: "Aviso",
            message: getLoginErrorMessage(error),
            size: "medium",
            onEscape: true,
            buttons: {
               cancel: {
                  label: "OK",
                  className: "btn-outline-danger",
               },
            },
         });
      });
}

function getLoginErrorMessage(error) {
   if (error.code == "auth/user-not-found") {
      return "Usuário não encontrado!";
   }

   if (error.code == "auth/wrong-password") {
      return "Senha inválida!";
   }

   if (error.code == "auth/missing-password") {
      return "Senha inválida!";
   }

   if (error.code == "auth/invalid-email") {
      return "Digite um email válido!";
   }

   if (error.code == "auth/missing-email") {
      return "Digite um e email válido!";
   }

   if (error.code == "auth/invalid-login-credentials") {
      return "Usuário ou senha inválidos!";
   }

   return error.message;
}

var form = {
   email: () => document.getElementById("email-login"),
   emailInvalidError: () => document.getElementById("email-invalid-error"),
   emailRequiredError: () => document.getElementById("email-required-error"),
   password: () => document.getElementById("password"),
   passwordRequiredError: () => document.getElementById("password-required-error"),
   recoverPasswordButton: () => document.getElementById("recover-password"),
   loginButton: () => document.getElementById("login-button"),
};

// Forulário de login e cadastro
var signup = document.getElementById("sign-up");
var signin = document.getElementById("sign-in");
var title_signin = document.getElementById("title-signin");
var title_signup = document.getElementById("title-signup");
var name_signup = document.getElementById("name-signup");
var empresa_signup = document.getElementById("empresa-signup");
var confirmar_senha = document.getElementById("confirmar-senha");
var btnsignin = document.getElementById("btnsignin");
var btnsignup = document.getElementById("btnsignup");
var login_button = document.getElementById("login-button");
var signup_button = document.getElementById("signup-button");
var form_bg = document.querySelector(".modal-content-login");

signup.addEventListener("click", () => {
   form_bg.classList.add("modal-content-login-bg");

   title_signin.classList.add("d-none");
   title_signup.classList.remove("d-none");

   name_signup.classList.remove("d-none");
   empresa_signup.classList.remove("d-none");
   confirmar_senha.classList.remove("d-none");

   login_button.classList.add("d-none");
   signup_button.classList.remove("d-none");

   btnsignup.classList.add("d-none");
   btnsignin.classList.remove("d-none");
});

signin.addEventListener("click", () => {
   formLogin();
});

function formLogin() {
   form_bg.classList.remove("modal-content-login-bg");
   title_signin.classList.remove("d-none");
   title_signup.classList.add("d-none");

   name_signup.classList.add("d-none");
   empresa_signup.classList.add("d-none");
   confirmar_senha.classList.add("d-none");

   login_button.classList.remove("d-none");
   signup_button.classList.add("d-none");

   btnsignup.classList.remove("d-none");
   btnsignin.classList.add("d-none");
}
