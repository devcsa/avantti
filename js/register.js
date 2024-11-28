function validatePasswordMatch() {
   const password = form.password().value;
   const confirmPassword = form.confirmPassword().value;

   if (password != confirmPassword) {
      form.confirmPasswordDoesntMatchError().style.display = password === confirmPassword ? "true" : "block";
      bootbox.dialog({
         title: "Aviso",
         message: "Confirmação de Senha Incorreta!",
         size: "medium",
         onEscape: true,
         buttons: {
            cancel: {
               label: "OK",
               className: "btn-outline-danger",
            },
         },
      });

      return false;
   }
   return true;
}

function register() {
   if (!validatePasswordMatch()) {
      return;
   }

   const email = form.email().value;
   const password = form.password().value;

   firebase
      .auth()
      .createUserWithEmailAndPassword(email, password)
      .then((userCredential) => {
         const user = userCredential.user;

         firebase.initializeApp(firebaseConfig);

         const db = firebase.firestore();
         const timestamp = firebase.firestore.FieldValue.serverTimestamp();

         db.collection("users")
            .doc(user.uid)
            .set({
               name: form.name().value,
               email: email,
               company: form.company().value,
               created: timestamp,
               modified: timestamp,
               status: true,
               userId: user.uid,
               access_level: 1,
            })
            .then(() => {
               bootbox.dialog({
                  title: "Aviso",
                  message: "Usuário cadastrado com sucesso!",
                  size: "medium",
                  onEscape: true,
                  buttons: {
                     cancel: {
                        label: "OK",
                        className: "btn-outline-success",
                     },
                  },
               });
               $("#loginModal").modal("hide");
            })
            .catch((error) => {
               bootbox.dialog({
                  title: "Aviso",
                  message: getErrorMessage(error),
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
      })
      .catch((error) => {
         bootbox.dialog({
            title: "Aviso",
            message: getRegisterErrorMessage(error),
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

function getRegisterErrorMessage(error) {
   if (error.code == "auth/email-already-in-use") {
      return "Email já está em uso!";
   }

   if (error.code == "auth/invalid-email") {
      return "Digite um email válido!";
   }

   if (error.code == "auth/missing-email") {
      return "Digite um e email válido!";
   }

   if (error.code == "auth/missing-password") {
      return "Digite uma senha válida!";
   }

   if (error.code == "auth/weak-password") {
      return "Senha deve ter pelo menos 6 caracteres!";
   }

   if (error.code == "auth/invalid-login-credentials") {
      return "Usuário ou senha inválidos!";
   }

   if (error.code == "auth/wrong-password") {
      return "Senha atual não confere!";
   }

   return error.message;
}

var form = {
   name: () => document.getElementById("name-login"),
   email: () => document.getElementById("email-login"),
   company: () => document.getElementById("empresa-login"),

   emailInvalidError: () => document.getElementById("email-invalid-error"),
   emailRequiredError: () => document.getElementById("email-required-error"),

   password: () => document.getElementById("password"),
   passwordRequiredError: () => document.getElementById("password-required-error"),
   passwordMinLengthError: () => document.getElementById("password-min-length-error"),

   confirmPassword: () => document.getElementById("confirmPassword"),
   confirmPasswordDoesntMatchError: () => document.getElementById("password-doesnt-match-error"),

   registerButton: () => document.getElementById("register-button"),
};
